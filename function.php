<?php

    $mysqli = new mysqli("localhost","root","","rainbow");
    $mysqli->query("SET NAMES'utf8'");
    date_default_timezone_set('Europe/Moscow');
    class func{
        function oper_defense (){
            global $templ, $mysqli,$site_url;
            $cont=array();
            $cont['data']='';
            $cont['type']='';
            $proverka='';
            $type = (isset($_GET['type']))?$_GET['type']:"";
            if($type==''){
                $result_set=$mysqli->query("SELECT * FROM `operations` WHERE `side`='Defense' ORDER BY `type` DESC");
                if(mysqli_num_rows($result_set)){
                    while (($data=$result_set->fetch_assoc())!=false)  {
                        $cont['data'].="<li><img src='".$data['img']."'></li><li>Имя: ".$data['name']."</li><li>Сторона: ".$data['side']."</li><li>Организация: ".$data['type']."</li>";
                        if($proverka != $data['type']){
                            $cont['type'].="<a href='".$site_url."?act=men_def&type=".$data['type']."'>".$data['type']."</a> ";
                        }
                        $proverka=$data['type'];
                    }
                }
            }else{
                $result_set=$mysqli->query("SELECT * FROM `operations` WHERE `side`='Defense' AND `type`='{$type}'");
                if(mysqli_num_rows($result_set)){
                    while (($data=$result_set->fetch_assoc())!=false)  {
                        $cont['data'].="<li><img src='".$data['img']."'></li><li>Имя: ".$data['name']."</li><li>Сторона: ".$data['side']."</li><li>Организация: ".$data['type']."</li>";
                    }
                    $cont['type'].="<a href='".$site_url."?act=men_def'>Back to Defense</a> ";
                    $cont['type'].="<a href='".$site_url."'>Back to Side</a>";
                }
            }
            $content=$templ->main_defense($cont);
            $this->print_page($content);
        }
        function oper_attack (){
            global $templ, $mysqli,$site_url;
            $cont=array();
            $cont['data']='';
            $cont['type']='';
            $proverka='';
            $type = (isset($_GET['type']))?$_GET['type']:"";
            if($type==''){
                $result_set=$mysqli->query("SELECT * FROM `operations` WHERE `side`='Attack' ORDER BY `type` DESC");
                if(mysqli_num_rows($result_set)){
                    while (($data=$result_set->fetch_assoc())!=false)  {
                        $cont['data'].="<li><img src='".$data['img']."'></li><li>Имя: ".$data['name']."</li><li>Сторона: ".$data['side']."</li><li>Организация: ".$data['type']."</li>";
                        if($proverka != $data['type']){
                            $cont['type'].="<a href='".$site_url."?act=men_attack&type=".$data['type']."'>".$data['type']."</a> ";
                        }
                        $proverka=$data['type'];
                    }
                }
            }else{
                $result_set=$mysqli->query("SELECT * FROM `operations` WHERE `side`='Attack' AND `type`='{$type}'");
                if(mysqli_num_rows($result_set)){
                    while (($data=$result_set->fetch_assoc())!=false)  {
                        $cont['data'].="<li><img src='".$data['img']."'></li><li>Имя: ".$data['name']."</li><li>Сторона: ".$data['side']."</li><li>Организация: ".$data['type']."</li>";
                    }
                    $cont['type'].="<a href='".$site_url."?act=men_attack'>Back to Attack</a> ";
                    $cont['type'].="<a href='".$site_url."'>Back to Side</a>";
                }
            }
            $content=$templ->main_attack($cont);
            $this->print_page($content);
        }
        function menu(){
            global $templ;
            $content=$templ->menu();
            $this->print_page($content);
        }
        function print_page($content=""){
            global $templ;
            $body = $templ->header();
            $body.= $content;
            $body.= $templ->footer();
            print $body;
            exit;
        } 
    }

    ?>





                        