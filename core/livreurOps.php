<?php
    include ("../config.php");
    include ("../entite/livreur.php");

    class livreurOps{


        function selectproduit($code_livreur){
            $sql="SELECT `code_livreur`,`nom`,`prenom` ,`mail`,`num_tel`   FROM `livreur` WHERE code_livreur=$code_livreur";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
     
        function modifierlivreur($x){
            $sql = "UPDATE `livreur` SET  `code_livreur` = :code_livreur, `nom` = :nom, `prenom` = :prenom , `mail` = :mail, `num_tel` = :num_tel  where code_livreur=:code_livreur";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                    $req->bindValue(':code_livreur',$x->get_code_livreur());
                    $req->bindValue(':nom',$x->get_nom());
                    $req->bindValue(':prenom',$x->get_prenom());
                    $req->bindValue(':mail',$x->getmail());
                    $req->bindValue(':num_tel',$x->get_num_tel());
    
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
       
        function ajouterlivreur($x){
            $sql = "INSERT INTO `livreur` (code_livreur,nom,prenom,mail,num_tel) VALUES (:code_livreur,:nom,:prenom,:mail,:num_tel)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':code_livreur',$x->get_code_livreur());
                $req->bindValue(':nom',$x->get_nom());
                $req->bindValue(':prenom',$x->get_prenom());
                $req->bindValue(':mail',$x->getmail());
                $req->bindValue(':num_tel',$x->get_num_tel());

           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_livreur($start,$perpage){
            $sql="SELECT `code_livreur`, `nom`, `Prenom`, `mail`, `num_tel` FROM `livreur` limit $start,$perpage";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimer_livreur($id){
        $sql="DELETE FROM livreur where code_livreur=:code_livreur";
$db=config::getConnexion();
try{
$req=$db->prepare($sql);
$req->bindValue(':code_livreur',$id);
$req->execute();
}
catch(Exception $e){
    die('Erreur:' .$e->getMessage());
}
       
}
}
?>