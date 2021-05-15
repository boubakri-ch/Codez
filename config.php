<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
<<<<<<< HEAD
        self::$instance = new PDO('mysql:host=localhost;dbname=tunitaste', 'root','');
=======
        self::$instance = new PDO('mysql:host=localhost;dbname=tunitaste', 'chiheb','chiheb');
>>>>>>> d2384483ac921dbedb44453d5faec2d3e4f38444
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>