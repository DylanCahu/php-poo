<?php

class Magicien extends Personnage
{
    private $_magie; //indique la puissance du magicien

    public function attaquer($persoAttaque): Personnage  //on va réecrire sur la class perso MAIS il faut renvoyer la meme chose (ici : Personnage)
    {
        $persoAttaque->setDegats($persoAttaque->getDegats()+ $this->getForce()) ;
        //parent::attaquer($persoAttaque); //appel une fonction du parent
        return $this;
    }

    public function insulter()
    {
        print("</br>" .$this->getNom() . " : Tu as le QI d'une huitre !");
    }
}