<?php
    class livraison{
        private $id;
        private $id_client;
        private $adresse;
        private $num_commande;
        private $date_l;
        private $code_livreur;
       

        function __construct($id_client,$adresse,$num_commande,$date_l,$id,$code_livreur){
            $this->id=$id;
            $this->id_client = $id_client;
            $this->adresse = $adresse;
            $this->num_commande = $num_commande;
            $this->date_l = $date_l;
            $this->code_livreur = $code_livreur;
        

        }
         
        function getid(){
            return $this->id;
        }
        function getid_client(){
            return $this->id_client;
        }
        function getadresse(){
            return $this->adresse;
        }
        function getcode_livreur(){
            return $this->code_livreur;
        }
        function get_num_commande(){
            return $this->num_commande;
        }
        function get_date_l(){
            return $this->date_l;

        }
      
        function set_type($id_client){
            $this->id_client=$id_client;
       }
       function setadresse($adresse){
            $this->adresse=$adresse;
       }
       function setcode_livreur($code_livreur){
        $this->code_livreur=$code_livreur;
   }
       function set_num_commande($num_commande){
            $this->num_commande=$num_commande;
       }
       function set_date_l($date_l){
        $this->date_l=$date_l;
   }
   function set_id($id){
    $this->id=$id;
}

    }
?>