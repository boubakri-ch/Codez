<?php   
     require "C:/wamp64/www/web/core/clientOps.php";
 
 
    
     $p=new client ($_POST['id_client'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password']);

    $client = new clientOps();
    $client->modifier_client($p);
    header("location:liste_client.php");


?>