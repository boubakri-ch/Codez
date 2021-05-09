<?php
  include "C:/wamp64/www/web/core/loginOps.php";

    session_start();
    if(isset($_SESSION['unique_id'])){
        $login=new loginOps();
        $id=$_SESSION['unique_id'];
        $liste_4=$login->offline($id);
  
        $db = config::getConnexion();
                session_unset();
                session_destroy();
                header("location:account/page_login.php");

    }
?>