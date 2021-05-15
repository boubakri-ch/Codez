<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/client.php");

    class clientOps{
        function ajouterClient($x){
            $sql = "INSERT INTO `client` (nom,prenom,email,password_c,adresse) VALUES (:nom,:prenom,:email,:password_c,:adresse)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':nom',$x->get_nom());
                $req->bindValue(':prenom',$x->get_prenom());
                $req->bindValue(':email',$x->get_email());
                $req->bindValue(':password_c',$x->get_password());
                $req->bindValue(':adresse',$x->get_adresse());
           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_client($start,$perpage){
            $sql="SElECT * From client limit $start,$perpage";
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
        $sql="DELETE FROM client where code_client=:id";
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
function selectclient($id_modif){
    $replaced = str_replace(' ', '', $id_modif);
    $sql="SELECT `code_client`,`nom`,`prenom`,`email`,`password_c`,`adresse` FROM `client` WHERE code_client=$replaced";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifier_client($x){
    $sql = "UPDATE `client` SET `code_client`=:code_client,`nom`=:nom,`prenom`=:prenom,`email`=:email,`password_c`=:password_c,`adresse`=:adresse WHERE code_client=:code_client";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $code_client=$x->get_code_client();
        $req->bindValue(':code_client',$code_client);
        $req->bindValue(':nom',$x->get_nom());
        $req->bindValue(':prenom',$x->get_prenom());
        $req->bindValue(':email',$x->get_email());
        $req->bindValue(':password_c',$x->get_password());
        $req->bindValue(':adresse',$x->get_adresse());
            
            $req->execute();    
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}

}
?>