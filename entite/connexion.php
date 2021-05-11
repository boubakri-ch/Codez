<?php
    class login{
        private $email;
        private $mdp;
      

        function __construct($email,$mdp){
            $this->email = $email;
            $this->mdp = $mdp;
      

        }
        function get_email(){
            return $this->email;
        }
        function get_mdp(){
            return $this->mdp;
        }
      

    }
?>