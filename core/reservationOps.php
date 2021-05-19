<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/reservation.php");

    class reservationOps{


        function selectreservation($id){
            $sql="SELECT * FROM `reservation` WHERE code_reservation=$id";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
     
     
        function modifier_reservation($x){
            $sql = "UPDATE `reservation` SET  `code_reservation` = :code_reservation, `date_reservation` = :date_reservation , `num_pers` = :num_pers , `numero_tel` = :numero_tel , `id_fournisseur` = :id_fournisseur,`email_c`=:mail where code_reservation=:code_reservation" ;
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                    $req->bindValue(':code_reservation',$x->get_code_reservation());
                    $req->bindValue(':date_reservation',$x->get_date_reservation());
                    $req->bindValue(':num_pers',$x->get_num_pers());
                    $req->bindValue(':numero_tel',$x->get_numero_tel());
                    $req->bindValue(':id_fournisseur',$x->get_id_fournisseur());
                   
                    $req->bindValue(':mail',$x->get_email());

    
                    $req->execute();    
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
       
        function ajouterreservation($x){
            $sql = "INSERT INTO `reservation`(`date_reservation`, `num_pers`, `numero_tel`, `id_fournisseur`,`email_c`) VALUES (:date_reservation , :num_pers , :numero_tel , :id_fournisseur,:mail)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':date_reservation',$x->get_date_reservation());
                $req->bindValue(':num_pers',$x->get_num_pers());
                $req->bindValue(':numero_tel',$x->get_numero_tel());
                $req->bindValue(':id_fournisseur',$x->get_id_fournisseur());
                $req->bindValue(':mail',$x->get_email());

           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_reservation(){
            $sql="SELECT `code_reservation`, `date_reservation`, `num_pers`, `numero_tel`, `nom`, `email_c` FROM `reservation`,`fournisseur` WHERE fournisseur.id_fournisseur=reservation.id_fournisseur";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimer_reservation($id){

$sql="DELETE FROM reservation where code_reservation=:id";
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