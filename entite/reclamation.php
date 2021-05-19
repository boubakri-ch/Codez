<?php
    class reclamation{
        private $code_rec;
       
        private $descrip;
        private $unique_id;
      

        function __construct($code_rec,$descrip,$unique_id){
            $this->code_rec = $code_rec;
            
            $this->descrip = $descrip;
            $this->unique_id=$unique_id;
      

        }
        function get_code_rec(){
            return $this->code_rec;
        
    
        }
        function get_descrip(){
            return $this->descrip;
        }
        function get_unique_id()
        {
            return $this->unique_id;
        }
    }
?>