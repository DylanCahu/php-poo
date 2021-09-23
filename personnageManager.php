<?php

class PersonnageManager
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

    public function add(Personnage $perso): Personnage
    {

    }

    public function delete(Personnage $perso): bool
    {

    }

    public function getOne(int $id)
    {

    }

    public function getList(): array
    {
        //retourne la liste de chaque personnages
        $ListeDePersonnages = array();
        $request =$this->_db->query('SELECT id, nom, `force`, degats, niveau, experience FROM perso');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {

            $perso = new Personnage($ligne);
            $ListeDePersonnages[] = $perso;//entre le perso dans le tableau
        }
        return $ListeDePersonnages;
    } 

    public function update(Personnage $perso)
    {

    }
}
