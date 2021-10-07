<?php

class Guerrier extends Personnage {
    private $_force; //indique la puissance du magicien

    public function frapper($persoAttaque): Personnage  //on va réecrire sur la class perso MAIS il faut renvoyer la meme chose (ici : Personnage)
    {
        $persoAttaque->_degat += $this->_force;
        parent::frapper($persoAttaque); //appel une fonction du parent
        return this;
    }
}