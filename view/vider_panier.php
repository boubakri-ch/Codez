<?php 
   include ("../core/panierOps.php");
   $id=$_GET['id'];
  
   $panier=new panierOps(); 
    $panier->vider_panier($id);
 header('Location:cart.php'); 
?>