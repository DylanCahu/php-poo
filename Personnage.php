
<?php

class Personnage
{

    // Déclaration des attributs et méthodes ici.
    private $_nom = 'Inconnue'; //nom
    private $_force = 50; //force
    private $_experience = 1;
    private $_degats = 0;

    public function definirForce($force)
    {
        $this->_force = $force;
    }

    public function definirDegats($degats)
    {
        $this->_degats = $degats;
    }
    public function afficherDegats()
    {
        return $this->_degats;
    }

    public function definirExperience($experience)
    {
        $this->_experience = $experience;
    }

    //une methode qui permet de parler.
    public function parler()
    {
        print('Je suis un perso <br>');
    }

    //une methode qui frappera un personnage (suivant la force qu'il a).
    public function frapper($adversaire)
    {
        $adversaire->_degats += $this->_force;
        //$adversaire->_degats = $adversaire->_degats + $this->_force;
    }

    //Une methode augmentant l'attribut $experience du personnage.
    public function gagnerExperience()
    {
        $this->_experience++;
    }

    //Une methode augmentant l'attribut $experience du personnage.
    public function afficherExperience()
    {

        return $this->_experience;
    }

}

?>