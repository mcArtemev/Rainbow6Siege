
<?php
  $site_url='http://localhost/Rainbow/index.php';
 include "temple.php";
 include "function.php";
 $func = new func();
 $templ = new templ();
 $action = (isset($_GET['act']))?$_GET['act']:"";
 switch ($action) {
   case 'men_at':

   break;
   case 'men_def':
    $func->oper_defense();
   break;
   case 'men_attack':
    $func->oper_attack();
   break;
   default:
   $func->menu();
   break;
 }
?>
  
