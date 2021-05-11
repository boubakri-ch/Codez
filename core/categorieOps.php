<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/categorie.php");

    class categorieOps{
        function afficher_categories ($categorie){
            echo "Cin: ".$categorie->get_code_categorie()."<br>";
            echo "Nom: ".$categorie->get_libelle()."<br>";
        }
      
       
        function ajouterCategorie($x){
            $sql = "INSERT INTO `categorie` (libelle) VALUES (:libelle)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':libelle',$x->get_libelle());
           
                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
            }    
        }
        function afficher_categorie(){
            $sql="SElECT * From categorie";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
           
    }
    function supprimercat($id){
        $sql="DELETE FROM categorie where code_categorie=:id";
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