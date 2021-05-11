<?php 
    require "C:/wamp64/www/web/core/adminOps.php";
   $id=$_GET['id'];
   $admin=new adminOps(); 
   $admin->supprimeradm($id);
   header('Location:liste_admin.php'); 
?>