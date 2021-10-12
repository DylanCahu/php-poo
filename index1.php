<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>jeu</title>
</head>
<body>
<h1>JEU</h1>
</body>
</html>
<?php

// include "Personnage.php";

function chargerClasse(string $classe){
    include $classe . ".php";
}

spl_autoload_register('chargerClasse');

print(" | FORCE petit = " . Personnage::FORCE_PETITE);
print(" | FORCE moyenne = " . Personnage::FORCE_MOYENNE);
print(" | FORCE Grande = " . Personnage::FORCE_GRANDE);

$perso1 = new Personnage("perso1", Personnage::FORCE_GRANDE, 0);
Personnage::parler();

$perso2 = new Personnage("perso2", Personnage::FORCE_PETITE);
Personnage::parler();


$perso1->setExperience(1)->attaquer($perso2)->getDegats();
$perso2->setExperience(15);

// print("ken dit = ");
// Personnage::parler();

$perso1->attaquer($perso2);
$perso2->attaquer($perso1);
print("<div class=stat_card>");
    print("<div class='exp'> 
                <img src=Capture.png>
                <p class='exp_name'>Stat de ".$perso1->getNom()." :</p> 
                
                <p>XP = " . $perso1->afficheExperience() ."
                <br>FORCE = ". $perso1->getforce() ."
                <br>DEGATS = ". $perso1->getDegats()."</p>
            </div>");

    print("<div class='exp'> VS </div>");

    print("<div class='exp'> 
                
                <img src=Capture2.png>
                <p class='exp_name'>Stat de ".$perso2->getNom()." :</p> 

                <p>XP = " . $perso2->afficheExperience() ."
                <br>FORCE = ". $perso2->getforce() ."
                <br>DEGATS = ". $perso2->getDegats()."</p>
        </div>");
print("</div>");
