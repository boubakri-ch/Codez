<?php 
   include ("../core/livraisonOps.php");
   $id=$_GET['id'];
  
   $livraison=new livraisonOps(); 
   $livraison->supprimer_livraison($id);
 header('Location:afficher_livraison.php'); 
?>