<?php 
   require "C:/wamp64/www/web/core/menuOps.php";
   $id=$_GET['id'];
  
   $menu=new menuOps(); 
   $menu->supprimer_menu($id);
 header('Location:liste_menu.php'); 
?>