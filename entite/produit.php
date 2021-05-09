<?php
    class produit{
        private $code_produit;
        private $image_produit;
        private $libelle;
        private $nom;
        private $code_categorie;
        private $prix;

        function __construct($code_produit,$image_produit,$libelle,$code_categorie,$prix,$nom){
            $this->code_produit = $code_produit;
            $this->image_produit=$image_produit;
            $this->libelle = $libelle;
            $this->code_categorie = $code_categorie;
            $this->prix=$prix;
            $this->nom=$nom;

        }
        function get_code_produit(){
            return $this->code_produit;
        }
        function get_prix_produit()
        {
            return $this->prix;
        }
        function get_image_produit(){
            return $this->image_produit;
        }
        function get_libelle(){
            return $this->libelle;
        }
     
        function get_nom(){
            return $this->nom;
        }
        
        function get_code_categorie(){
            return $this->code_categorie;
        }
        
        function set_code_produit($code_produit){
			$this->code_produit=$code_produit;
		}
        function set_libelle($libelle)
        {
            $this->libelle=$libelle;
        }
     
      
       
        function set_code_categorie($code_categorie){
             $this->code_categorie=$code_categorie;
        }
     
        function set_prix($prix)
        {
            $this->prix=$prix;
        }
        function set_nom($nom)
        {
            $this->prix=$nom;
        }
    }
?>