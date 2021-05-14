<?php 
  require "C:/wamp64/www/web/core/commandeOps.php";
   $id=$_GET['id'];
  
   $commande=new commandeOps(); 
   $commande->supprimercomd($id);
 header('Location:liste_commande.php'); 
?>