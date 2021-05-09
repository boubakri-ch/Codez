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
        function selectcompte_chat($unique_id){

            $replaced = str_replace(' ','', $unique_id);
            $sql="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`password_c`,`type_c` ,`statut`FROM `users` where not `unique_id`=$replaced ";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
            
        }
        function selectcompte_chat_m($unique_id){

            $replaced = str_replace(' ','', $unique_id);
            $sql="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`password_c`,`type_c` ,`statut`FROM `users` where  `unique_id`=$replaced ";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
            
        }
        function selectmessage($user_id){

            $replaced = str_replace(' ','', $user_id);
            $sql="SELECT * FROM users WHERE unique_id =$replaced ";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
            
        }
        function insert_chat($outgoing_id,$incoming_id,$message){
            $sql = "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
            VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function offline($id)
        {
             $sql = "UPDATE `users` SET `statut`='offline' WHERE unique_id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
    
    
                $req->execute();    
        }
        catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
        }    
    }
    function online($id)
    {
         $sql = "UPDATE `users` SET `statut`='online' WHERE unique_id=:id";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);


            $req->execute();    
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
    }

?>