<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
    try{
        self::$instance = new PDO('mysql:host=localhost;dbname=web', 'root', '');
        //PDO est une classe permettant d'accéder à n'importe quel type de DB
        /*l'adreese du pc où mysql est installé généralment localhost+ le nom de la database */
    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
    }
      }
      return self::$instance;
    }
  }

?>