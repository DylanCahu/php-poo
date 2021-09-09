
<?php

class Personnage
{

    // Déclaration des attributs et méthodes ici.
    private $_nom = 'Inconnue'; //nom
    private $_force = 50; //force
    private $_experience = 1;
    private $_degats = 0;

    public function __construct($nom, $force, $degats)
    {
        $this->_nom = $nom; //creation du nom du personnage
        $this->_force = $force; //creation de la force du personnage
        $this->_degats = $degats; //creation des degats du personnage
        $this->_experience = 1;
        print("<br>Le joueur  " . $this->_nom . "  a été créé !");
    }

    public function setForce($force)
    {
        $this->_force = $force;
    }

    public function getForce($force)
    {
        return $this->_force;
    }

    public function setDegats($degats)
    {
        $this->_degats = $degats;
    }
    public function getDegats()
    {
        return $this->_degats;
    }

    public function setExperience($experience)
    {
        $this->_experience = $experience;
    }

    //Une methode augmentant l'attribut $experience du personnage.
    public function getExperience()
    {

        return $this->_experience;
    }

    //Une methode augmentant l'attribut $experience du personnage.
    public function gagnerExperience()
    {
        $this->_experience++;
    }

    //une methode qui permet de parler.
    public function parler()
    {
        print('Je suis un perso <br>');
    }

    //une methode qui frappera un personnage (suivant la force qu'il a).
    public function frapper(Personnage $adversaire)
    {
        $adversaire->_degats += $this->_force;
        //$adversaire->_degats = $adversaire->_degats + $this->_force;
    }

}

?>