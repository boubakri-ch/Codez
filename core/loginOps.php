<?php 
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/login.php");


    class loginOps{
    
    
        function selectcompte($email){

            $replaced = str_replace(' ','', $email);
            $sql="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`password_c`,`type_c` FROM `users` where `email`='$replaced'";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
    
    }

?>