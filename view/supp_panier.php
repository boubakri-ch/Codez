<?php 
   include ("../core/panierOps.php");
   $id=$_GET['id'];
  
   $panier=new panierOps(); 
   $panier->supprimer_prod_panier($id);
 header('Location:cart.php'); 
?>