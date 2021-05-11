<?php   
    include "../core/livreurOps.php";
 
 
        

    $li=new livreur ($_POST['code_livreur'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['num_tel']);


    $livreur = new livreurOps();
    $livreur->modifierlivreur($li);
   header("location:afficher_livreur.php");
   


?>