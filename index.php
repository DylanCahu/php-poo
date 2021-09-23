<?php

function chargerClasse(string $classe)
{
    include $classe . '.php'; //On inclut la classe correspondante au param passé
}

//On enregistre la fonction en autoload
//pour qu'elle soit appelé dès qu'on instanciera une classe non délclarée.

spl_autoload_register('chargerClasse');

include "conf.php";

try {
    $db = new PDO($dsn, $user, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //renvoie les entiers sous formes d'entier et non sous forme de string

    $personnageManager = new PersonnageManager($db);

    $personnages = $personnageManager->getList();

    print('<br>Liste de perso :');
    foreach ($personnages as $personnage) {// "as" definie une variable local
        print('<br>' . $personnage->getNom());
    }

    // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //renvoie les entiers sous formes d'entier et non sous forme de string
    // if ($db){
    //     print('Lecture de la base de donnée :<br>');
    //     $request = $db->query('SELECT id, nom, `force`, degats, niveau, experience FROM perso');
    //     while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {

    //         //On passe les données (stockées dans un tableau) concernant le perso au constructeur
    //         //qui va etre chargé d'assigner les valeurs qu'on lui fait
    //         $perso =new Personnage($ligne);
    //          print('<br> '.$perso->getNom() . ' a '. $perso->getForce() . ' de force, '. $perso->getDegats() .' de degats,' .
    //          $perso->getExperience() .' d\'exp et est niveau '. $perso->getNiveau() );
    //     }
    // }
} catch (PDOException $e) {
    print($e->getMessage());
}
