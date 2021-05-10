<?php
    class fournisseur{
        private $id;
        private $nom;
        private $adresse;
        private $numero;
        private $image;
        
       

        function __construct($id,$adresse,$numero,$image,$nom){
            $this->id=$id;
            $this->nom = $nom;
            $this->adresse = $adresse;
            $this->numero = $numero;
            $this->image = $image;
        

        }
         
        function getid(){
            return $this->id;
        }
        function getnom(){
            return $this->nom;
        }
        function getadresse(){
            return $this->adresse;
        }
        function getnumero(){
            return $this->numero;
        }
        function getimage(){
            return $this->image;

        }
      
        function set_type($nom){
            $this->nom=$nom;
       }
       function setadresse($adresse){
            $this->adresse=$adresse;
       }
       function set_numero($numero){
            $this->numero=$numero;
       }
       function set_image($image){
        $this->image=$image;
   }
   function set_id($id){
    $this->id=$id;
}

    }
?>