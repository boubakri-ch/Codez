

<?php
  include "C:/wamp64/www/web/core/loginOps.php";

    session_start();
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = $_POST['searchTerm'];
    $db = config::getConnexion();
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $output = "";
    $db = config::getConnexion();
$liste=$db->query($sql);
    if($liste->rowCount() > 0){
        include_once "data.php";
    }else{
        $output .='No user found';
    }
    echo $output;
?>