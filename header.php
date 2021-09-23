<?php 
function chargerClasse(string $classe)
{
    include $classe . '.php'; //On inclut la classe correspondante au param passé
}

//On enregistre la fonction en autoload
//pour qu'elle soit appelé dès qu'on instanciera une classe non délclarée.

spl_autoload_register('chargerClasse');

include "conf.php";