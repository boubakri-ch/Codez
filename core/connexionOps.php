<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/connexion.php");

    class connexionOps{
        function connexion_admin($email){
    $sql="SELECT * FROM `adminn` WHERE email='$email'" ;
    $db = config::getConnexion();
    try{

        $liste=$db->query($sql);
        
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function connexion_client($email){
        $sql="SELECT * FROM `client` WHERE email='$email'" ;
        $db = config::getConnexion();
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