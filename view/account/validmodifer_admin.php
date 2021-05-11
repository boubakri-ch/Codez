<?php   
     require "C:/wamp64/www/web/core/adminOps.php";
 
 
    
     $p=new admin ($_POST['id_admin'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],$_POST['role']);


    $admin = new adminOps();
    $admin->modifier_admin($p);
    header("location:liste_admin.php");


?>