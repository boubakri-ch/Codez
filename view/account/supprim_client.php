<?php 
  require "C:/wamp64/www/web/core/clientOps.php";
   $id=$_GET['id'];
  
   $client=new clientOps(); 
   $client->supprimercli($id);
 header('Location:liste_clients.php'); 
?>