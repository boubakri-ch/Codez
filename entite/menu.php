<?php
    class menu{
        private $id;
        private $nom;
        private $prix;
        private $ingredient;
        
        function __construct($id,$nom,$prix,$ingredient){
            $this->id = $id;
            $this->nom = $nom;
            $this->prix = $prix;
            $this->ingredient = $ingredient;
            
      

        }
        function get_id(){
            return $this->id;
        }
        function get_nom(){
            return $this->nom;
        }
        function get_prix(){
            return $this->prix;
        }
        function getingredient(){
            return $this->ingredient;
        }
        
        function set_id($id){
            $this->id=$id;
       }
       function set_nom($nom){
            $this->nom=$nom;
       }
            function set_prix($prix){
                $this->prix=$prix;
           }
           function setingredient($ingredient){
            $this->ingredient=$ingredient;
       }
           

    }
?>