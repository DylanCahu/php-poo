<?php

class TerrainDeCombat{
    public function lancerUnCombat(Personnage $perso1, Personnage $perso2){
        $perso1->attaquer($perso2);

        print ("</br>" . $perso1);
        print ("</br>" . $perso2);
        $perso1 ->insulter();
        $perso2 ->insulter();
    }
}