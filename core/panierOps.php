<?php
    include ("../config.php");
    include ("../entite/panier.php");

    class panierOps{


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
     
        function dec($id){
            $sql = "UPDATE `panier` SET  `quantite`=`quantite`-1 ,`prix`=(select produit.prix from produit where produit.code_produits=panier.code_produits)*`quantite` WHERE code_panier=$id";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                   
    
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function inc($id){
            $sql = "UPDATE `panier` SET  `quantite`=`quantite`+1   ,`prix`=(select produit.prix from produit where produit.code_produits=panier.code_produits)* `quantite` WHERE code_panier=$id";
            
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                   
    
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function ajouterpanier($x){
            $sql = "INSERT INTO `panier` (`code_produits`, `quantite`, `id_session`,`prix`)VALUES (:code_produits,:quantite,:id_session,:prix) ";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':code_produits',$x->get_code_produits());
                $req->bindValue(':quantite',$x->get_quantite());
                $req->bindValue(':id_session',$x->get_id_session());
               
                $req->bindValue(':prix',$x->get_prix());

           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_produit_panier($id){
            $sql="SELECT produit.nom,panier.prix,panier.quantite,panier.code_panier,produit.prix as prix_unit  from panier,produit where panier.code_produits=produit.code_produits and panier.id_session=$id";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimer_prod_panier($id){
        $sql="DELETE FROM panier where code_panier=:code_panier";
$db=config::getConnexion();
try{
$req=$db->prepare($sql);
$req->bindValue(':code_panier',$id);
$req->execute();
}
catch(Exception $e){
    die('Erreur:' .$e->getMessage());
}
       
}
function somme($id){
    $sql="select sum(prix) as somme from panier where id_session=$id";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
   
}
function ajouter_commande($id,$code_commande){
    $sql = "INSERT INTO `commande` (`code_panier`,`code_produits`, `quantite`, `id_session`,`prix`,`code_commande`) select `code_panier`, `code_produits`, `quantite`, `id_session`,`prix`,:code_commande from panier where panier.id_session=$id ";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
       
        $req->bindValue(':code_commande',$code_commande);

   
        $req->execute();   
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
function vider_panier($id){
    $sql="DELETE FROM panier where id_session=:id_session";
$db=config::getConnexion();
try{
$req=$db->prepare($sql);
$req->bindValue(':id_session',$id);
$req->execute();
}
catch(Exception $e){
die('Erreur:' .$e->getMessage());
}
   
}
function ajouter_entete($id,$adresse){
    $sql = "INSERT INTO  `entete_commande`( `date_c`, `id_client`,`adresse`) values (now(),:id_session,:adresse)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':id_session',$id);
        $req->bindValue(':adresse',$adresse);


        $req->execute();   
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
function selectcodecommande($id){
    $sql="SELECT max(`code_commande`) as code  FROM `entete_commande` WHERE id_client=$id";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function selectadresse($id){
    $sql="select adresse from client where unique_id=$id";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function afficher_commande_back($start,$perpage)
{
    $sql="SELECT `code_commande`, `date_c`, `id_client`, `adresse` FROM `entete_commande` limit $start,$perpage";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
} 
function afficher_commande_produit($start,$perpage,$id)
{
    $sql="SELECT commande.`code`,commande.`code_produits`, commande.`quantite`, commande.`prix`,produit.`nom` FROM `commande`,`produit` WHERE commande.code_produits=produit.code_produits and code_commande=$id limit $start,$perpage";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
} 
function supprimercommande($id){
    $sql="DELETE FROM entete_commande where `code_commande`=:id";
    $sql1="DELETE FROM commande where `code_commande`=:id";

$db=config::getConnexion();
try{
    $req1=$db->prepare($sql1);
    $req1->bindValue(':id',$id);
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    $req->execute();
    $req1->execute();

    }
catch(Exception $e){
die('Erreur:' .$e->getMessage());
}
   
}
function supprimer_prod_commande($id){
    $sql="DELETE FROM commande where code=:code_panier";
$db=config::getConnexion();
try{
$req=$db->prepare($sql);
$req->bindValue(':code_panier',$id);
$req->execute();
}
catch(Exception $e){
die('Erreur:' .$e->getMessage());
}
   
}
function select_commande_modifier($id)
{
    $sql="SELECT * FROM `entete_commande` WHERE entete_commande.code_commande=$id";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }

}
function modifier_entete($code_commande,$id,$date_c,$adresse){
    $sql = "UPDATE `entete_commande` SET `code_commande`=:code_commande,`date_c`=:date_c,`id_client`=:id_session,`adresse`=:adresse WHERE code_commande=$code_commande";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':id_session',$id);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':date_c',$date_c);
        $req->bindValue(':code_commande',$code_commande);
        $req->execute();   
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}
}
?>