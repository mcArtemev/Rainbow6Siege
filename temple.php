<?php
    class templ{
        function __CONSTRUCT(){}

        function main_attack($data=''){
          return <<<EOF
                <div class='side_attack'>
                    {$data['type']}
                </div>
                <div class='oper_attack'> 
                    <ul> 
                        {$data['data']}
                    </ul>    
                </div>
EOF;
        }
        function main_defense($data=''){
          return <<<EOF
          <div class='side_defense'>
              {$data['type']}
          </div>
          <div class='oper_defense'> 
              <ul> 
                  {$data['data']}
              </ul>    
          </div>
EOF;
        }
        function menu(){
          global $site_url;
          return <<<EOF
          <div class="box_m">
            <a href="{$site_url}?act=men_attack">Attack</a>
            <a href="{$site_url}?act=men_def">Defense</a>
          </div>
EOF;
        }
        function header($title='',$background='',$logo=''){
            return <<<EOF
            <html>
              <head>
                <title>
                  {$title}
                </title>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
              <meta content="no-cache" http-equiv="Pragma"/>
              <meta content="no-cache" http-equiv="no-cache"/>
              <script src="https://code.jquery.com/jquery-3.1.1.js%22%3E"></script>
              <link rel="stylesheet" href="style.css">
              </head>
                <body>
                  
EOF;
          }

          function footer(){
            return <<<EOF
                  <div style="clear:both"></div>
                  <div class="site_basement"></div>
                  <script src="script.js"></script>
                </body>
              </html>
EOF;
              }
    }


?>