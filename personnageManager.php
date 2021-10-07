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
        $sth = $this->_db->prepare("Select nom ,`force`, degats, niveau, experience FROM perso id= $id ;");
        $sth->execute(array($id));
        $ligne = $sth->fetch();
        $perso = new Personnage($ligne);
        return $perso;

    }

    public function getList(): array
    {
        //retourne la liste de chaque personnages
        $ListeDePersonnages = array();
        $request =$this->_db->query('SELECT id, classe, nom, `force`, degats, niveau, experience FROM perso');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {

            switch ((int)$ligne['classe']) {
                case Personnage::MAGICIEN:
                    $perso = new Magicien($ligne);
                    break;

                case Personnage::GUERRIER:
                    $perso = new Guerrier($ligne);
                    break;

                case Personnage::BRUTE:
                    $perso = new Brute($ligne);
                    break;

                default:
                    break;
            }


           
            $ListeDePersonnages[] = $perso;//entre le perso dans le tableau
        }
        return $ListeDePersonnages;
    } 

    public function update(Personnage $perso)
    {

    }
}
