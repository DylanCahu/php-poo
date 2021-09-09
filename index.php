<?php

include "Personnage.php";

print("<h1>Jeu de combat</h1>");

/*$perso = new Personnage();
$perso->parler();
$perso->gagnerExperience();
print($perso->afficherExperience()); */

//on crée deux personnages
$perso1 = new Personnage("Gustave", 20, 0);
//$perso1->definirForce(20);
$perso1->setExperience(15);

$perso2 = new Personnage("Flaubert", 60, 0);
//$perso2->definirForce(60);
$perso2->setExperience(1);

//ensuite, on veut que les persos se frappent
$perso1->frapper($perso2);
$perso2->frapper($perso1);

//print("<br>Dégats du joueur 1 :" . $perso1->getDegats());
//print("<br>Dégats du joueur 2 :" . $perso2->getDegats());
