<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/fournisseur.php");

    class fournisseurOps{


        function selectproduit($id){
            $sql="SELECT * FROM `fournisseur` WHERE id_fournisseur=$id";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
     
        function modifierfournisseur($x){
            $sql = "UPDATE `fournisseur` SET  `id_fournisseur` = :id, `adresse` = :adresse, `numero` = :numero , `image` = :image_f , `nom` = :nom  where id_fournisseur=:id";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                    $req->bindValue(':id',$x->getid());
                    $req->bindValue(':nom',$x->getnom());
                    $req->bindValue(':adresse',$x->getadresse());
                    $req->bindValue(':numero',$x->getnumero());
                    $req->bindValue(':image_f',$x->getimage());
                   
    
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function modifier_fournisseur($x){
            $sql = "UPDATE `fournisseur` SET  `id_fournisseur` = :id, `adresse` = :adresse, `numero` = :numero ,  `nom` = :nom  where id_fournisseur=:id";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                    $req->bindValue(':id',$x->getid());
                    $req->bindValue(':nom',$x->getnom());
                    $req->bindValue(':adresse',$x->getadresse());
                    $req->bindValue(':numero',$x->getnumero());
                   
                   
    
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
       
        function ajouterfournisseur($x){
            $sql = "INSERT INTO `fournisseur`(`nom`, `image`, `adresse`, `numero`) VALUES (:nom, :image_f, :adresse, :numero)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':nom',$x->getnom());
                $req->bindValue(':adresse',$x->getadresse());
                $req->bindValue(':numero',$x->getnumero());
                $req->bindValue(':image_f',$x->getimage());

           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_fournisseur(){
            $sql="SElECT * From fournisseur";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimer_fournisseur($id){
        $sql="DELETE FROM fournisseur where id_fournisseur=:id";
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