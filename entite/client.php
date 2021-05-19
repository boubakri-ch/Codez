<?php
    class client{
        private $code_client;
        private $unique_id;
        private $nom;
        private $prenom;
        private $email;
        private $password;
        private $etat;
      

        function __construct($code_client,$unique_id,$nom,$prenom,$email,$password,$etat){
            $this->code_client = $code_client;
            $this->unique_id=$unique_id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->etat=$etat;
      

        }
        function get_etat()
        {
            return $this->etat;
        }
        function get_code_client(){
            return $this->code_client;
        }

        function get_code_unique(){
            return $this->unique_id;
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
    class client1{
        private $code_client;
        private $unique_id;
        private $nom;
        private $prenom;
        private $email;
        private $password;
        private $etat;
        private $adresse;
      

        function __construct($code_client,$unique_id,$nom,$prenom,$email,$password,$etat,$adresse){
            $this->code_client = $code_client;
            $this->unique_id=$unique_id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->etat=$etat;
            $this->adresse=$adresse;
      

        }
        function get_etat()
        {
            return $this->etat;
        }
        function get_code_client(){
            return $this->code_client;
        }

        function get_code_unique(){
            return $this->unique_id;
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
        function get_adresse(){
            return $this->adresse;
        }
    }
?>