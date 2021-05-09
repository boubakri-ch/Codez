<?php   
     require "C:/wamp64/www/web/core/categorieOps.php";
 
 
     
    $p=new categorie ($_POST['id'],$_POST['libelle']);


    $categorie = new categorieOps();
    $categorie->modifier_cat($p);
    header("location:liste_categorie.php");


?>