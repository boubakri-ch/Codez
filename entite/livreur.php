<?php
    class livreur{
        private $code_livreur;
        private $nom;
        private $prenom;
        private $mail;
        private $num_tel;

        function __construct($code_livreur,$nom,$prenom,$mail,$num_tel){
            $this->code_livreur = $code_livreur;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->num_tel = $num_tel;
      

        }
        function get_code_livreur(){
            return $this->code_livreur;
        }
        function get_nom(){
            return $this->nom;
        }
        function get_prenom(){
            return $this->prenom;
        }
        function getmail(){
            return $this->mail;
        }
        function get_num_tel(){
            return $this->num_tel;
        }
        function set_code_livreur($code_livreur){
            $this->code_livreur=$code_livreur;
       }
       function set_nom($nom){
            $this->nom=$nom;
       }
            function set_prenom($prenom){
                $this->prenom=$prenom;
           }
           function setmail($mail){
            $this->mail=$mail;
       }
           function set_num_tel($num_tel){
                $this->num_tel=$num_tel;
           }

    }
?>