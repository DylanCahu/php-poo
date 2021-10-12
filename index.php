<?php

include "header.php";



try {
    $db = new PDO($dsn, $user, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    $personnageManager = new PersonnageManager($db);
    $personnages = $personnageManager->getList();

    print('</br>Liste des personnages : ');
    foreach ($personnages as $personnage){
        // print('</br>' . $personnage->getNom());
        print('<h3><a href="personnage_view.php?id=' . $personnage->getId() . '">' . $personnage->getNom() . ' 
        : </a></h3><p class="exp"> sa force est de : ' . $personnage->getForce() . '<br> ses dégats sont : 
            ' . $personnage->getDegats() . '<br> son XP est :' . $personnage->afficheExperience() . '<br> Il est niveau :
             ' . $personnage->getNiveau() .'</p>');

    }

    // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // if ($db){
    //     print('Lecture de la base de donnée :');
    //     $request = $db->query('SELECT id, nom, `force`, degats, niveau, experience FROM perso;');
    //     while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
    //         $perso = new Personnage($ligne);
    //         print('<h3>' . $perso->getNom() . '</h3> ça force est de : ' . $perso->getForce() . '<br> ses dégats sont : ' . $perso->getDegats() . '<br> son XP est :' . $perso->getExperience() . '<br> Il est niveau : ' . $perso->getNiveau());
    //     }
    // }
} catch (PDOException $e){
    print($e->getMessage());
}

$uneBrute = new Brute(
    [
        'id'=>7,
        'nom'=>'Brutus',
        'force'=>50,
    ]
);

//création de perso local pour experimenter
$unMagicien = new MagicienVoleur(
    [
        'id'=>9,
        'nom'=>'Dumbeldord',
        'force'=>20,
    ]
);

$unCon = new GuerrierVoleur(
    [
        'id'=>10,
        'nom'=>'Spartacouille',
        'force'=>80,
    ]
);

$combat = new TerrainDeCombat();
$combat->lancerUnCombat($unMagicien, $uneBrute);
print("</br><hr></br>");
$combat->lancerUnCombat($unCon, $unMagicien);
