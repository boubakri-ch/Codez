<?php
  require "C:/wamp64/www/web/entite/menu.php";
  require "C:/wamp64/www/web/config.php";
    class menuOps{


        function modifier_menu($x){
            $sql = "UPDATE `menu` SET `id`=:id,`nom`=:nom,`prix`=:prix,`ingredient`=:ingredient WHERE id=:id";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $id=$x->get_id();
                $req->bindValue(':id',$id);
                $req->bindValue(':nom',$x->get_nom());
                $req->bindValue(':prix',$x->get_prix());
                $req->bindValue(':ingredient',$x->getingredient());
               
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function selectmenu($id_modif){
            $replaced = str_replace(' ', '', $id_modif);
            $sql="SELECT `id`,`nom`,`prix`,`ingredient` FROM `menu` WHERE id=$replaced";
            $db = config::getConnexion();
        
            try{
        
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        
       
        function ajoutermenu($x){
            $sql = "INSERT INTO `menu` (id,nom,prix,ingredient) VALUES (:id,:nom,:prix,:ingredient) ";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':id',$x->get_id());
                $req->bindValue(':nom',$x->get_nom());
                $req->bindValue(':prix',$x->get_prix());
                $req->bindValue(':ingredient',$x->getingredient());
                
           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function affichermenu($start,$perpage){
            $sql="SELECT `id`, `nom`, `prix`, `ingredient` FROM `menu` limit $start,$perpage";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
        
    function supprimer_menu($id){
        $sql="DELETE FROM menu where id=:id";
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

    $sql="SELECT * FROM menu order by id";
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