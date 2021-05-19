<?php   
     require "C:/wamp64/www/web/core/chefOps.php";
 
 
$p=new chef ($_POST['id_chef'],$_POST['nom'],$_POST['prenom'],$_POST['fonction']);
$chef = new chefOps();
$chef->modifier_chef($p);
header("location:liste_chef.php");

?>