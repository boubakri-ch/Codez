<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/client.php");

    class clientOps{
        function ajouterClient($x){
            $sql = "INSERT INTO `users`(fname,lname,email,password_c,unique_id,type_c,etat) VALUES (:nom,:prenom,:email,:password_c,:unique_id,:type_c,'actif')";
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
        function afficher_client(){
            $sql="SElECT * From client";
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
}
?>