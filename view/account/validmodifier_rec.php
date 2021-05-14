<?php   
     require "C:/wamp64/www/web/core/reclamationOps.php";
 
 
    
     $p=new reclamation ($_POST['id_reclamation'],$_POST['descrip']);

    $reclamation = new reclamationOps();
    $reclamation->modifier_reclamation($p);
    header("location:front_liste_rec.php");


?>