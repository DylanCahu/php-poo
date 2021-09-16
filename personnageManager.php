<?php

class PersonnageManager
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db) :PersonnageManager
    {
        $this->_db = $db;
    }

    public function add(Personnage $perso) :Personnage
    {

    }

    public function delete(Personnage $perso) :bool
    {

    }

    public function getOne(int $id)
    {

    }

    public function getList():array
    {

    }

    public function update(Personnage $perso)
    {

    }
}
