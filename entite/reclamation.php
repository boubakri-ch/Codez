<?php
    class reclamation{
        private $code_rec;
       
        private $descrip;
      

        function __construct($code_rec,$descrip){
            $this->code_rec = $code_rec;
            
            $this->descrip = $descrip;
            
      

        }
        function get_code_rec(){
            return $this->code_rec;
        
    
        }
        function get_descrip(){
            return $this->descrip;
        }

    }
?>