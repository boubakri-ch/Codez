<?php
    class panier{
        private $code_panier;
        private $code_produits;
        private $qunaite;
        private $id_session;
        private $prix;


        function __construct($code_panier,$code_produits,$qunaite,$id_session,$prix){
            $this->code_panier = $code_panier;
            $this->code_produits=$code_produits;

            $this->qunaite=$qunaite;
            
            $this->id_session=$id_session;
            $this->prix=$prix;

        }
        function get_code_panier(){
            return $this->code_panier;
        }
        function get_prix(){
            return $this->prix;
        }
        function get_code_produits(){
            return $this->code_produits;
        }
        function get_quantite(){
            return $this->qunaite;

        }
       function get_id_session(){
            return $this->id_session;
            
        }
      

    }
?>