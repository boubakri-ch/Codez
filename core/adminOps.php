<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/admin.php");

    class adminOps{
        function ajouterAdmin($x){
            $sql = "INSERT INTO `adminn` (nom,prenom,email,password_a,role_a) VALUES (:nom,:prenom,:email,:password_a,:role_a)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':nom',$x->get_nom());
                $req->bindValue(':prenom',$x->get_prenom());
                $req->bindValue(':email',$x->get_email());
                $req->bindValue(':password_a',$x->get_password());
                $req->bindValue(':role_a',$x->get_role());
           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_admin($start,$perpage){
            $sql="SElECT * From adminn limit $start,$perpage";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimeradm($id){
        $sql="DELETE FROM adminn where code_admin=:id";
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
function selectadmin($id_modif){
    $replaced = str_replace(' ', '', $id_modif);
    $sql="SELECT `code_admin`,`nom`,`prenom`,`email`,`password_a`,`role_a` FROM `adminn` WHERE code_admin=$replaced";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifier_admin($x){
    $sql = "UPDATE `adminn` SET `code_admin`=:code_admin,`nom`=:nom,`prenom`=:prenom,`email`=:email,`password_a`=:password_a,`role_a`=:role_a WHERE code_admin=:code_admin";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $code_admin=$x->get_code_admin();
        $req->bindValue(':code_admin',$code_admin);
        $req->bindValue(':nom',$x->get_nom());
        $req->bindValue(':prenom',$x->get_prenom());
        $req->bindValue(':email',$x->get_email());
        $req->bindValue(':password_a',$x->get_password());
        $req->bindValue(':role_a',$x->get_role());

            $req->execute();    
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}

}
?>