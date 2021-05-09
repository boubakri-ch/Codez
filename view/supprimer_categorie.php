<?php 
    require "C:/wamp64/www/web/core/categorieOps.php";
   $id=$_GET['id'];
   $cat=new categorieOps(); 
   $cat->supprimercat($id);
   header('Location:liste_categorie.php'); 
?>