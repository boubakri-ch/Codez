<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/commande.php");

    class adminOps{
        function ajouterCommande($x){
            $sql = "INSERT INTO `commande` (nom_commande,prix,etat) VALUES (:nom_commande,:prix,:etat)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':nom_commande',$x->get_nom_commande());
                $req->bindValue(':prix',$x->get_prix());
                $req->bindValue(':etat',$x->get_etat());
               
           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_commande(){
            $sql="SElECT * From commande";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimercomd($id){
        $sql="DELETE FROM commande where code_commande=:id";
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
function modifier_commande($x){
    $sql = "UPDATE `commande` SET `code_commande`=:code_commande,`nom_commande`=:nom_commande,`prix`=:prix,`etat`=:etat WHERE code_commande=:code_commande";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $code_admin=$x->get_code_commande();
        $req->bindValue(':code_commande',$code_commande);
        $req->bindValue(':nom_commande',$x->get_nom_commande());
        $req->bindValue(':prix',$x->get_prix());
        $req->bindValue(':etat',$x->get_etat());
       

            $req->execute();    
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
}
?>