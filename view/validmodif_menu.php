<?php   
     require "C:/wamp64/www/web/core/menuOps.php";
 
 
    
     $p=new menu ($_POST['id_menu'],$_POST['nom'],$_POST['prix'],$_POST['ingredient']);

    $menu = new menuOps();
    $menu->modifier_menu($p);
    header("location:liste_menu.php");


?>