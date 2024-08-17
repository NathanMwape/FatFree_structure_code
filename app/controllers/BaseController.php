<?php

// BaseController est une classe de base pour d'autres contrôleurs
class BaseController
{
   protected $db, $f3;
   function __construct()
   {
      // Instance de l'objet Fat-Free Framework (F3)
      $f3 = Base::instance();

      // Initialisation de la connexion à la base de données
      $db = new \DB\SQL(
         $f3->get("DB_DNS") . $f3->get("DB_NAME"),
         $f3->get("DB_USER"),
         $f3->get("DB_PASSWORD")
      );
      $this->db = $db;
      $this->f3 = $f3;
   }

   function beforeroute() {}
   function afterroute() {}
}
