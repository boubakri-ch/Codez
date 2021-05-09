<?php 
    session_start();
    include "C:/wamp64/www/web/core/loginOps.php";

    $db = config::getConnexion();

    if(isset($_SESSION['unique_id'])){
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = $_POST['incoming_id'];
        $message = $_POST['message'];
        if(!empty($message)){
            $login=new loginOps();
  $liste=$login->insert_chat($outgoing_id,$incoming_id,$message);

        }
    }else{
        header("location: ../login.php");
    }


    
?>