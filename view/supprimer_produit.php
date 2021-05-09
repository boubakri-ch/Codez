<?php 
  require "C:/wamp64/www/web/core/produitOps.php";
   $id=$_GET['id'];
  
   $produit=new produitOps(); 
   $produit->supprimerproduit($id);
 header('Location:liste_articles.php'); 
?>