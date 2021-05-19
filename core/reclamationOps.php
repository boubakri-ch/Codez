<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/reclamation.php");

    class reclamationOps{
        function ajouterReclamation($x){
            $sql = "INSERT INTO `reclamation` (descrip,unique_id) VALUES (:descrip,:unique_id)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);



                $req->bindValue(':descrip',$x->get_descrip());
                $req->bindValue(':unique_id',$x->get_unique_id());

           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_reclamation($start,$perpage,$id){
            $sql="select * from reclamation where unique_id=$id limit $start,$perpage ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function afficher_reclamation_b($start,$perpage){
        $sql="select * from reclamation limit $start,$perpage ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
       
}
    function supprimerrec($id){
        $sql="DELETE FROM reclamation where code_rec=:id";
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
function selectclient($id_modif){
    $replaced = str_replace(' ', '', $id_modif);
    $sql="SELECT `code_rec`,`descrip` FROM `reclamation` WHERE code_rec=$replaced";
    $db = config::getConnexion();

    try{

    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifier_reclamation($x){
    $sql = "UPDATE `reclamation` SET `code_rec`=:code_rec,`descrip`=:descrip WHERE code_rec=:code_rec";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $code_rec=$x->get_code_rec();
        $req->bindValue(':code_rec',$code_rec);
        $req->bindValue(':descrip',$x->get_descrip());
       
        
       
            
            $req->execute();    
    }
    catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
    }    
}

}
?>
