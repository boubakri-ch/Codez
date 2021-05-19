<?php   
     require "C:/wamp64/www/web/core/reclamationOps.php";
 
 
     
     $r=new reclamation($_POST['code_rec'],$_POST['reclamation'],null);


     $res = new reclamationOps();
     $res->modifier_reclamation($r);
    header("location:afficher_reclamation.php");


?>