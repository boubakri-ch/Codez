<?php 
   require "C:/wamp64/www/web/core/chefOps.php";
   $id=$_GET['id'];
  
   $chef=new chefOps(); 
   $chef->supprimer_chef($id);
 header('Location:liste_chef.php'); 
?>