<?php 
  require "C:/wamp64/www/web/core/reclamationOps.php";
   $id=$_GET['id'];
  
   $reclamation=new reclamationOps(); 
   $reclamation->supprimerrec($id);
 header('Location:liste_reclamation.php'); 
?>