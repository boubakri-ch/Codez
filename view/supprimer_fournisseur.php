<?php 
   include ("../core/fournisseurOps.php");
   $id=$_GET['id'];
  
   $fournisseur=new fournisseurOps(); 
   $fournisseur->supprimer_fournisseur($id);
 header('Location:afficher_fournisseur.php'); 
?>