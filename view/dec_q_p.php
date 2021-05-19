<?php
include ("C:/wamp64/www/web/core/panierOps.php");
 
   
 

$panier= new panierOps();
$panier->dec($_GET['id']);
header("location:cart.php");

 ?>
