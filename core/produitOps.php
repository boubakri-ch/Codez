<?php
    include ("C:/wamp64/www/web/config.php");
    include ("C:/wamp64/www/web/entite/produit.php");

    class produitOps{
        function afficherproduit(){
			
			$sql="SELECT `code_produits`,`description`,`image_produit`,`prix`,`code_categorie`,`nom` FROM `produit`";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

        function afficher_produit(){
			
			$sql="SELECT `code_produits`,`image_produit`,`prix`,`nom` from produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
        
        function selectproduit($id_modif){
            $replaced = str_replace(' ', '', $id_modif);
            $sql="SELECT `code_produits`,`description`,`image_produit`,`prix`,`code_categorie`,`nom` FROM `produit` WHERE code_produits=$replaced";
            $db = config::getConnexion();

            try{

            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function afficherproduit_cat($id){
            $sql="SELECT  `code_produits`,`image_produit`,`libelle`,`taille`,`etat`,`couleur`,`code_categorie`,`quantite`,`prix` FROM `produit` WHERE code_categorie =$id GROUP BY code_produits" ;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function produit_detail($id){
            $sql="SELECT `code_produits`,`description`,`image_produit`,`prix`,`nom` ,`code_categorie`FROM `produit` WHERE code_produits =$id";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function produit_taille($id){
            $sql="SELECT taille FROM `produit` WHERE code_produits = ".$id;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function produit_con($id){
            $sql="SELECT `code_produits`,`image_produit`,`libelle`,`taille`,`etat`,`couleur`,`code_categorie`,`quantite`,`prix` FROM `produit` WHERE code_produits != '$id' limit 4";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function produit_couleur($id){
            $sql="SELECT couleur FROM `produit` WHERE code_produits = ".$id;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function produit_photo($id){
            $sql="SELECT image_produit FROM `produit` WHERE code_produits = ".$id;
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
       function afficher_produit_tri_nom()
       {
           $sql="SELECT * FROM `produit` ORDER BY lieblle ASC";
           $db = config::getConnexion();
           try{
           $liste=$db->query($sql);
           return $liste;
           }
           catch (Exception $e){
               die('Erreur: '.$e->getMessage());
           }

       }
        function ajouterproduit($x){
            $sql = "INSERT INTO `produit` ( `image_produit`, `description`,`code_categorie`,`prix`,`nom`) VALUES ( :image_produit, :libelle,:code_categorie,:prix,:nom)";
            $db = config::getConnexion();
            try{
                $req=$db->prepare($sql);
                $req->bindValue(':image_produit',$x->get_image_produit());
                $req->bindValue(':libelle',$x->get_libelle());
                $req->bindValue(':code_categorie',$x->get_code_categorie());
                $req->bindValue(':prix',$x->get_prix_produit());
                $req->bindValue(':nom',$x->get_nom());

                $req->execute();   
            }
            catch (Exception $e){
                    echo 'Erreur:'.$e->getMessage();
            }    
        }
        function supprimerproduit($id){
            $replaced = str_replace(' ', '', $id);
    $sql="DELETE FROM produit where code_produits =$replaced";
    $db=config::getConnexion();
    try{
    $req=$db->prepare($sql);
    
    $req->execute();
    
    }
    catch(Exception $e){
    die('Erreur:' .$e->getMessage());
    }       
    } 
    function modifierproduit($x){
        $sql = "UPDATE `produit` SET `code_produits`=:code_produit,`description`=:libelle,`image_produit`=:image_produit,`prix`=:prix,`code_categorie`=:code_categorie,`nom`=:nom WHERE code_produits=:code_produit";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
                $code_produit=$x->get_code_produit();
                $req->bindValue(':code_produit',$code_produit);

                $req->bindValue(':image_produit',$x->get_image_produit());
                $req->bindValue(':libelle',$x->get_libelle());
                $req->bindValue(':code_categorie',$x->get_code_categorie());
                $req->bindValue(':prix',$x->get_prix_produit());
                $req->bindValue(':nom',$x->get_nom());


                $req->execute();    
        }
        catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
        }    
    }
    function modifier_produit($x){
        $sql = "UPDATE `produit` SET `code_produits`=:code_produit,`description`=:libelle,`prix`=:prix,`code_categorie`=:code_categorie,`nom`=:nom WHERE code_produits=:code_produit";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $code_produit=$x->get_code_produit();
            $req->bindValue(':code_produit',$code_produit);

            $req->bindValue(':libelle',$x->get_libelle());
            $req->bindValue(':code_categorie',$x->get_code_categorie());
            $req->bindValue(':prix',$x->get_prix_produit());
            $req->bindValue(':nom',$x->get_nom());

                $req->execute();    
        }
        catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
        }    
    }
}
?>