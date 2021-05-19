<?php 
  include "C:/wamp64/www/web/core/loginOps.php";
  session_start();
 $login=new loginOps();
  $liste=$login->selectcompte_chat($_SESSION['unique_id']);
  //$liste_2=$login->selectcompte_chat_m($unique_id);

  $outgoing_id = $_SESSION['unique_id'];

$count =$liste->rowCount();
$output = "";
if($count == 0){
    $output .= "No users are available to chat";
}else
{
    include_once "data.php";
}
 echo $output;
?>