<?php
    class client{
        private $code_client;
        private $nom;
        private $prenom;
        private $email;
        private $password;
      

        function __construct($code_client,$nom,$prenom,$email,$password){
            $this->code_client = $code_client;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
      

        }
        function get_code_client(){
            return $this->code_client;
        }
        function get_nom(){
            return $this->nom;
        }
        function get_prenom(){
            return $this->prenom;
        }
        function get_email(){
            return $this->email;
        }
        function get_password(){
            return $this->password;
        }

    }
?>