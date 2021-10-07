<?php
include "header.php";


$id= $_GET["id"];

try {
    $db = new PDO($dsn, $user, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    $personnageManager = new PersonnageManager($db);
    
    $personnageManager->getOne($id);

    print('<table>');
    print('<tr>');
    print('<td>'. $perso->getNom(). '</td>');
    print('<td>'. $perso->getForce(). '</td>');
    print('<td>'. $perso->getDegats(). '</td>');
    print('<td>'. $perso->getExperience(). '</td>');
    print('<td>'. $perso->getNiveau(). '</td>');
    print('</tr>');
    print('</table>');




} catch (PDOException $e){
    print($e->getMessage());
}

