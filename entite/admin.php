<?php
    class admin{
        private $code_admin;
        private $nom;
        private $prenom;
        private $email;
        private $password;
        private $role;

      

        function __construct($code_admin,$nom,$prenom,$email,$password,$role){
            $this->code_admin = $code_admin;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
      

        }
        function get_code_admin(){
            return $this->code_admin;
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
        function get_role(){
            return $this->role;
        }
    }
?>