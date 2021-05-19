<?php
   require "C:/wamp64/www/web/entite/chef.php";
   require "C:/wamp64/www/web/config.php";

    class chefOps{


        function selectchef($id_modif){
            $replaced = str_replace(' ', '', $id_modif);
            $sql="SELECT `id`,`nom`,`prenom`,`fonction` FROM `chef` WHERE id=$replaced";
            $db = config::getConnexion();
        
            try{
        
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
     
        
        function modifier_chef($x){
            $sql = "UPDATE `chef` SET `id`=:id,`nom`=:nom,`prenom`=:prenom,`fonction`=:fonction WHERE id=:id";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $id=$x->get_id_c();
                $req->bindValue(':id',$id);
                $req->bindValue(':nom',$x->get_nom_c());
                $req->bindValue(':prenom',$x->get_prenom());
                $req->bindValue(':fonction',$x->getfonction());
               
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
       
        function ajouterchef($x){
            $sql = "INSERT INTO `chef` (nom,prenom,fonction) VALUES (:nom,:prenom,:fonction) ";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':nom',$x->get_nom_c());
                $req->bindValue(':prenom',$x->get_prenom());
                $req->bindValue(':fonction',$x->getfonction());
                
           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_chef($start,$perpage){
            
            $sql="SELECT `id`, `nom`, `prenom`, `fonction` FROM `chef` limit $start,$perpage";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimer_chef($id){
        $sql="DELETE FROM chef where id=:id";
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

    $sql="SELECT * FROM chef order by id";
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