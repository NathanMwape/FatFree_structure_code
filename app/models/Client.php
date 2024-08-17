<?php

// Modèle pour interagir avec la table 'Clients' dans la base de données
class Client extends \DB\SQL\Mapper
{

    // Le constructeur initialise le modèle avec la base de données et la table 'Clients'
    public function __construct(DB\SQL $db)
    {
        parent::__construct($db, "Clients");
    }


    public function all()
    {
        $this->load();
        return $this->query; //Retourne le résultat sous forme de tableau d'objets
    }
}
