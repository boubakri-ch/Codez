<?php
    class reservation{
        private $id_fournisseur;
        private $code_reservation;
        private $date_reservation;
        private $num_pers;
        private $numero_tel;
        private $email;

        
        
       

        function __construct($id_fournisseur,$code_reservation , $date_reservation,$num_pers,$numero_tel,$email){
            $this->id_fournisseur=$id_fournisseur;
            $this->code_reservation = $code_reservation;
            $this->date_reservation = $date_reservation;
            $this->num_pers = $num_pers;
            $this->numero_tel = $numero_tel;
            $this->email=$email;
            
        

        }
         
        function get_id_fournisseur(){
            return $this->id_fournisseur;
        }
        function get_code_reservation(){
            return $this->code_reservation;
        }
        function get_num_pers(){
            return $this->num_pers;
        }
        function get_numero_tel(){
            return $this->numero_tel;
        }
        function get_date_reservation(){
            return $this->date_reservation;

        }
        function get_email(){
            return $this->email;

        }
      
      /*  function set_code($code_reservation){
            $this->code_reservation=$code_reservation;
       }
       function setdate($adresse){
            $this->adresse=$adresse;
       }
       function set_numero($numero){
            $this->numero=$numero;
       }
       function set_image($image){
        $this->image=$image;
   }
   function set_id($id){
    $this->id=$id;
}*/

    }
?>