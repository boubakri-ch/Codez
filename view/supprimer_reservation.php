<?php 
   include ("../core/reservationOps.php");
   $id=$_GET['id'];
  
   $reservation=new reservationOps(); 
   $reservation->supprimer_reservation($id);
 header('Location:afficher_reservation.php'); 
?>