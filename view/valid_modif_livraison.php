<?php   
    include "../core/livraisonOps.php";
 
 
        

    $l=new livraison ($_POST['id_client'],$_POST['adresse'],$_POST['num_c'],$_POST['date'],$_POST['id'],null);


    $livraison = new livraisonOps();
    $livraison->modifierlivraison($l);
    header("location:afficher_livraison.php");


?>