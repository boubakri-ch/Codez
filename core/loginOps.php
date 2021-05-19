<?php 
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/login.php");


    class loginOps{
    
    
        function selectcompte($email){

            $replaced = str_replace(' ','', $email);
            $sql="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`password_c`,`type_c`,`etat` FROM `users` where `email`='$replaced'";
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
function afficher_admin($start,$perpage)
{
    $sql="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`etat` FROM `users` where `type_c`='admin' limit $start,$perpage";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
} 
function supprimeradmin($id){
    $sql="DELETE FROM users where `user_id`=:id";
$db=config::getConnexion();
try{
$req=$db->prepare($sql);
$req->bindValue(':id',$id);
$req->execute();
}
catch(Exception $e){
die('Erreur:' .$e->getMessage());
}
   
}
function ajouteradmin($x){
    $sql = "INSERT INTO `users`(fname,lname,email,password_c,unique_id,type_c,etat,statut) VALUES (:nom,:prenom,:email,:password_c,:unique_id,:type_c,'actif','offline')";
    $db = config::getConnexion();
    try{
        $statut="admin";
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$x->get_nom());
        $req->bindValue(':prenom',$x->get_prenom());
        $req->bindValue(':email',$x->get_email());
        $req->bindValue(':password_c',$x->get_password());
        $req->bindValue(':unique_id',$x->get_code_unique());
        $req->bindValue(':type_c',$statut);
        $req->execute();   
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
function select_compte_modifier($id)
{
$sql="SELECT `user_id`, `unique_id`, `fname`, `lname`, `email`, `password_c`, `type_c`, `statut`, `etat` FROM `users` where `unique_id`=$id";
$db = config::getConnexion();

try{

$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
} 
}
function modifier_compte_pass($x){
    $sql = "UPDATE `users` SET `fname`=:nom ,`lname`=:prenom,`email`=:email,`password_c`=:password_c where unique_id=:unique_id";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$x->get_nom());
        $req->bindValue(':prenom',$x->get_prenom());
        $req->bindValue(':email',$x->get_email());
        $req->bindValue(':password_c',$x->get_password());
        $req->bindValue(':unique_id',$x->get_code_unique());
        $req->execute();   
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
function modifier_compte_pass_null($x){
    $sql = "UPDATE `users` SET `fname`=:nom ,`lname`=:prenom,`email`=:email where unique_id=:unique_id";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$x->get_nom());
        $req->bindValue(':prenom',$x->get_prenom());
        $req->bindValue(':email',$x->get_email());
        $req->bindValue(':unique_id',$x->get_code_unique());
        $req->execute();   
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
function selectcompte_chat_admin($unique_id){

    $replaced = str_replace(' ','', $unique_id);
    $sql="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`password_c`,`type_c` ,`statut`FROM `users` where not `unique_id`=$replaced  and type_c='admin'";
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