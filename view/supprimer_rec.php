<?php 
  require "C:/wamp64/www/web/core/reclamationOps.php";
   $id=$_GET['id'];
  
   $reclamation=new reclamationOps(); 
   $reclamation->supprimerrec($id);
 header('Location:collections/afficher_reclamation.php'); 
?>