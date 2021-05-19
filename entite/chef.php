<?php
    class chef{
        private $id;
        private $nom;
        private $prenom;
        private $fonction;
        
        function __construct($id,$nom,$prenom,$fonction){
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->fonction = $fonction;
            
      

        }
        function get_id_c(){
            return $this->id;
        }
        function get_nom_c(){
            return $this->nom;
        }
        function get_prenom(){
            return $this->prenom;
        }
        function getfonction(){
            return $this->fonction;
        }
        
        function set_id($id){
            $this->id=$id;
       }
       function set_nom($nom){
            $this->nom=$nom;
       }
            function set_prenom($prenom){
                $this->prenom=$prenom;
           }
           function setfonction($fonction){
            $this->fonction=$fonction;
       }
           

    }
?>