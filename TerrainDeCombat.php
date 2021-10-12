<?php

class TerrainDeCombat{
    public function lancerUnCombat(Personnage $perso1, Personnage $perso2){
        $perso1->attaquer($perso2);

        if ($perso1 instanceof Volage){ //si le perso 1 sait voler
        print($perso2->getNom()." S'est fai voler ".$perso2->getPoche()." balles par ". $perso1->getNom());
        $perso1->faireLesPoches($perso2, $perso2->getPoche());
        }
        print ("</br>" . $perso1);
        print ("</br>" . $perso2);
        $perso1 ->insulter();
        $perso2 ->insulter();
    }
}