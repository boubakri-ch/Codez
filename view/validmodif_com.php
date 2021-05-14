<?php   
     require "C:/wamp64/www/web/core/commandeOps.php";
 
 
    
     $p=new commande ($_POST['id_commande'],$_POST['nom_commande'],$_POST['prix'],$_POST['etat']);

    $commande = new commandeOps();
    $commande->modifier_commande($p);
    header("location:liste_commande.php");


?>