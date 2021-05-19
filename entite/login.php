<?php
    class login{
        private $code_admin;
        private $unique_id;
        private $nom;
        private $prenom;
        private $email;
        private $password;
        private $etat;
      

        function __construct($code_admin,$unique_id,$nom,$prenom,$email,$password,$etat){
            $this->code_client = $code_admin;
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
        function get_code_admin(){
            return $this->code_admin;
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
?>