<?php
    class commande{
        private $code_commande;
        private $nom_commande;
        private $prix;
        private $etat;
      

        function __construct($code_commande,$nom_commande,$prix,$etat){
            $this->code_commande = $code_commande;
            $this->nom_commande = $nom_commande;
            $this->prix = $prix;
            $this->etat = $etat;
            
      

        }
        function get_code_commande() {
            return $this->code_commande;
        }
        function get_nom_commande(){
            return $this->nom_commande;
        }
        function get_prix(){
            return $this->prix;
        }
        function get_etat(){
            return $this->etat;
        }

    }
?>