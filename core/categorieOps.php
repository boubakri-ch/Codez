<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/categorie.php");

    class categorieOps{
      
       
        function ajouterCategorie($x){
            $sql = "INSERT INTO `categorie` (libelle) VALUES (:libelle)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':libelle',$x->get_libelle());
           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_categorie(){
            $sql="SElECT * From categorie";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimercat($id){
        $sql="DELETE FROM categorie where code_categorie=:id";
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

function selectproduit($id_modif){
    $replaced = str_replace(' ', '', $id_modif);
    $sql="SELECT `code_categorie`,`libelle` FROM `categorie` WHERE code_categorie=$replaced";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifier_cat($x){
    $sql = "UPDATE `categorie` SET `code_categorie`=:code_categorie,`libelle`=:libelle WHERE code_categorie=:code_categorie";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $code_categorie=$x->get_code_categorie();
        $req->bindValue(':code_categorie',$code_categorie);
        $req->bindValue(':libelle',$x->get_libelle());


            $req->execute();    
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
}
?>