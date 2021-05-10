<?php   
    require "C:/wamp64/www/web/core/reservationOps.php";











  $r=new reservation ($_POST['id_fournisseur'],$_POST['code_reservation'],$_POST['date'],$_POST['num_p'],$_POST['num_tel'],$_POST['mail']);


    $res = new reservationOps();
    $res->modifier_reservation($r);
    header("location:afficher_reservation.php");
  
   

 
?>