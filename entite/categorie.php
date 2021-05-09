<?php
    class categorie{
        private $code_categorie;
        private $libelle;
      

        function __construct($code_categorie,$libelle){
            $this->code_categorie = $code_categorie;
            $this->libelle = $libelle;
      

        }
        function get_code_categorie(){
            return $this->code_categorie;
        }
        function get_libelle(){
            return $this->libelle;
        }
      

    }
?>