<?php
    include ("../config.php");
    include ("../entite/livraison.php");

    class livraisonOps{


        function selectproduit($id){
            $sql="SELECT `id`,`id_client`,`adresse`,`num_commande` , DATE_FORMAT(`date_l`, '%d-%m-%Y') as date_l FROM `livraison` WHERE id=$id";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
     
        function modifierlivraison($x){
            $sql = "UPDATE `livraison` SET  `id_client` = :id_client, `adresse` = :adresse, `num_commande` = :num_commande , `date_l` = :date_l  where id=:id";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                    $req->bindValue(':id',$x->getid());
                    $req->bindValue(':id_client',$x->getid_client());
                    $req->bindValue(':adresse',$x->getadresse());
                    $req->bindValue(':num_commande',$x->get_num_commande());
                    $req->bindValue(':date_l',$x->get_date_l());
    
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
       
        function ajouterlivraison($x){
            $sql = "INSERT INTO `livraison` (id_client,adresse,num_commande,date_l,code_livreur) VALUES (:id_client,:adresse,:num_commande,:date_l,:code_livreur) ";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':id_client',$x->getid_client());
                $req->bindValue(':adresse',$x->getadresse());
                $req->bindValue(':num_commande',$x->get_num_commande());
                $req->bindValue(':date_l',$x->get_date_l());
                $req->bindValue(':code_livreur',$x->getcode_livreur());
           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_livraison($start,$perpage){
            $sql="SElECT `id`,`id_client`,`adresse`,`num_commande`,`date_l`,`livreur`.`prenom` From livraison,livreur where livreur.code_livreur = livraison.code_livreur  limit $start,$perpage";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimer_livraison($id){
        $sql="DELETE FROM livraison where id=:id";
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
function AfficherTri(){

    $sql="SELECT * FROM livraison order by num_commande";
    $db=config::getConnexion();
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