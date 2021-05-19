<?php 
    require "C:/wamp64/www/web/core/loginOps.php";
   $id=$_GET['id'];
   $c=new loginOps(); 
   $c->supprimeradmin($id);
   header('Location:afficher_admin.php'); 
?>