<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/client.php");

    class clientOps{
        function ajouterClient($x){
            $sql = "INSERT INTO `users`(fname,lname,email,password_c,unique_id,type_c,etat,statut) VALUES (:nom,:prenom,:email,:password_c,:unique_id,:type_c,'actif','offline')";
            $db = config::getConnexion();
            try{
                $statut="client";
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
        function ajouter_Client($x){
            $sql = "INSERT INTO `client`(fname,lname,email,password_c,unique_id,type_c,etat,statut,adresse) VALUES (:nom,:prenom,:email,:password_c,:unique_id,:type_c,'actif','offline',:adresse)";
            $db = config::getConnexion();
            try{
                $statut="client";
                $req=$db->prepare($sql);
                $req->bindValue(':nom',$x->get_nom());
                $req->bindValue(':prenom',$x->get_prenom());
                $req->bindValue(':email',$x->get_email());
                $req->bindValue(':password_c',$x->get_password());
                $req->bindValue(':unique_id',$x->get_code_unique());
                $req->bindValue(':type_c',$statut);
                $req->bindValue(':adresse',$x->get_adresse());

                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_client(){
            $sql=" SELECT `user_id`, `unique_id`, `fname`, `lname`, `email`, `statut`, `etat`,`adresse` FROM `client` where type_c='client' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function afficher_clientasc(){
        $sql=" SELECT `user_id`, `unique_id`, `fname`, `lname`, `email`, `statut`, `etat`,`adresse` FROM `client` where type_c='client' order by fname asc ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
       
}
function afficher_clientdesc(){
    $sql=" SELECT `user_id`, `unique_id`, `fname`, `lname`, `email`, `statut`, `etat`,`adresse` FROM `client` where type_c='client' order by fname desc ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
   
}
    function supprimercli($id){
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
function bloquer($id){
    $sql="UPDATE `users` SET `etat`='bloquer' where `user_id`=:id";
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
function activer($id){
    $sql="UPDATE `users` SET `etat`='actif' where `user_id`=:id";
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
function select_randid($email)
{
    $replaced = str_replace(' ', '', $email);

    $sql=" SELECT `unique_id` FROM `users` where email='$replaced'";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());  
}
}
function recupererclient($id)
{
 
    $sql=" SELECT * FROM `client` where unique_id=$id";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());  
}
}


function modifier_client_pass($x){
    $sql = "UPDATE `client` SET `fname`=:nom ,`lname`=:prenom,`email`=:email,`password_c`=:password_c,`adresse`=:adresse where unique_id=:unique_id";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$x->get_nom());
        $req->bindValue(':prenom',$x->get_prenom());
        $req->bindValue(':email',$x->get_email());
        $req->bindValue(':password_c',$x->get_password());
        $req->bindValue(':unique_id',$x->get_code_unique());
        $req->bindValue(':adresse',$x->get_adresse());

        $req->execute();   
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}

function modifier_client_pass_null($x){
    $sql = "UPDATE `client` SET `fname`=:nom ,`lname`=:prenom,`email`=:email,`adresse`=:adresse where unique_id=:unique_id";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$x->get_nom());
        $req->bindValue(':prenom',$x->get_prenom());
        $req->bindValue(':email',$x->get_email());
         $req->bindValue(':unique_id',$x->get_code_unique());
        $req->bindValue(':adresse',$x->get_adresse());

        $req->execute();   
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
    }
?>