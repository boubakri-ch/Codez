<?php 
   include ("../core/livreurOps.php");
   $id=$_GET['id'];
  
   $livreur=new livreurOps(); 
   $livreur->supprimer_livreur($id);
 header('Location:afficher_livreur.php'); 
?>