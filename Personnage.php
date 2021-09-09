
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
        $this->setNom($nom); //creation du nom du personnage
        $this->setForce($force); //creation de la force du personnage
        $this->setDegats($degats); //creation des degats du personnage
        $this->setExperience(1);
        print("<br>Le joueur  " . $this->_nom . "  a été créé !");
    }

    public function __toString(){
        //si un code demande a utilisé un objet sous forme de chaine de caractère, 
        //cette fonction s'en chargera
        return $this->getNom() . "(" .$this->getDegats(). ")";
    }

    public function setNom($nom)
    {
        if (!is_string($nom)) {
            trigger_error('Le nom doit etre textuel !', E_USER_ERROR);
            return; //stop du programme
        }
        $this->_nom = $nom;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setForce($force)
    {
        if (!is_int($force)) {
            trigger_error('La force doit etre un entier !', E_USER_ERROR);
            return; //stop du programme
        }
        if ($force > 100) {
            trigger_error('La force doit etre inferieur à 100 !', E_USER_ERROR);
            return; //stop du programme
        }
        $this->_force = $force;
    }

    public function getForce()
    {
        return $this->_force;
    }

    public function setDegats($degats)
    {
        if (!is_int($degats)) {
            trigger_error('Les degats doivent etre un entier !', E_USER_ERROR);
            return; //stop du programme
        }
        $this->_degats = $degats;
    }
    public function getDegats()
    {
        return $this->_degats;
    }

    public function setExperience($experience)
    {
        if (!is_int($experience)) {
            trigger_error('L\'experience doit etre un entier !', E_USER_ERROR);
            return; //stop du programme
        }
        if ($experience > 100) {
            trigger_error('L\'experience ne peut pas dépasser 100 !', E_USER_ERROR);
            return; //stop du programme
        }
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
        $adversaire->_degats += $this->_force;//$adversaire->_degats = $adversaire->_degats + $this->_force;
        $this->gagnerExperience();
        print('<br>'. $adversaire .' a été frappé par ' . $this . '-> Dégat de '
        . $adversaire . ' = ' . $adversaire->getDegats(). ' .'); 
        //ici, les $this ou $adversaire (sans rien) appel toString()
    }

}

?>