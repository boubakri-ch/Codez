<?php   
     require "C:/wamp64/www/web/core/panierOps.php";

    $panier=new panierOps(); 
    $panier->modifier_entete($_POST['code_commande'],$_POST['id_client'],$_POST['date_c'],$_POST['adresse']);
    header("location:afficher_commande.php");
 
?>