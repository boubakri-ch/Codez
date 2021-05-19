<?php 
    require "C:/wamp64/www/web/core/panierOps.php";
   $id=$_GET['id'];
   $c=new panierOps(); 
   $c->supprimercommande($id);
   header('Location:afficher_commande.php'); 
?>