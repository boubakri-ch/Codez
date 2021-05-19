<?php 
    require "C:/wamp64/www/web/core/clientOps.php";
   $id=$_GET['id'];
   $c=new clientOps(); 
   $c->supprimercli($id);
   header('Location:afficher_clients.php'); 
?>