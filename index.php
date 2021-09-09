<?php

include "Personnage.php";

print("<h1>Jeu de combat</h1>");

/*$perso = new Personnage();
$perso->parler();
$perso->gagnerExperience();
print($perso->afficherExperience()); */

//on crée deux personnages
$perso1 = new Personnage();
$perso1->definirForce(20);
$perso1->definirExperience(15);

$perso2 = new Personnage();
$perso2->definirForce(60);
$perso2->definirExperience(1);

//ensuite, on veut que les persos se frappent
$perso1->frapper($perso2);
$perso2->frapper($perso1);


print("<br>Dégats du joueur 1 :". $perso1->afficherDegats());
print("<br>Dégats du joueur 2 :". $perso2->afficherDegats());
