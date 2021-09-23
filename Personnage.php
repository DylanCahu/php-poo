<?php

class Personnage
{
    private $_id;
    private $_nom = 'Inconnu';
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;
    private $_niveau = 0;

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    private static $_texteAdire = 'DO U TOKIGN TO ME ? JE vais Te faire bobo !';
    private static $nbrPlayer = 0;

    public function __construct(array $ligne)
    {
        $this->hydrate($ligne);
        self::$nbrPlayer++;
    }

    public function hydrate(array $ligne)
    {
        foreach($ligne as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value); // on appel une methode qui est dans la variable donc on ajoute un $
            }
        }
    }

    public function __toString():string
    {
        return $this->getNom() . "(". $this->getDegats() .")";
    }

    public function setId(int $id):Personnage 
    {
        if (!is_int($id)){
            trigger_error("ERROR ERROR ERROR !");
        }
        $this->_id = $id;
        return $this;
    }

    public function getId(){
        return $this->_id;
    }

    public function setNiveau($_niveau):Personnage 
    {
        if (!is_int($_niveau)){
            trigger_error("niveau doit etre un chiffre !");
        }
        $this->_niveau = $_niveau;
        return $this;
    }

    public function getNiveau(){
        return $this->_niveau;
    }

    public function setNom(string $nom):Personnage{
        if (!is_string($nom)){
            trigger_error('Le nom d\'un personnage doit être un texte', E_USER_ERROR);
            return $this;
        }
        $this->_nom = $nom;
        return $this;
    }

    
    public function getNom(){
        return $this->_nom;
    }

    public function setForce($force):Personnage{
        if (!is_int($force)){
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_ERROR);
            return $this;
        }
        if ($force > 100){
            trigger_error('La force d\'un personnage ne doit pas dépasser 100', E_USER_ERROR);
            return $this;
        }
        // if (in_array($force, array(self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE))){
        //     $this->_force = $force;
        // } else{
        //     trigger_error('LA FORCE N\'EST PAS CORRECTE ', E_USER_ERROR);
        // }
        return $this;
    }

    public function getforce(){
        return $this->_force;
    }

    public function setExperience(int $_experience):Personnage{
        $this->_experience = $_experience;
        return $this;
    }

    public function getExperience():Personnage{
        $this->_experience++;
        return $this;
    }

    public function afficheExperience(){
        return $this->_experience;
    }

    public function setDegats($degats):Personnage{
        if (!is_int($degats)){
            trigger_error('Les dégats d\'un personnage doit être un nombre entier', E_USER_ERROR);
            return $this;
        }
        $this->_degats = $degats;
        return $this;
    }

    public function getDegats(){
        return $this->_degats;
    }

    public static function parler(){
        //print(self::$_texteAdire);// "JE vais Te faire bobo !");
        print('<p> JE suis le n° '.self::$nbrPlayer.'</p>');
    }

    public function frapper(Personnage $adversaire):Personnage{
        // $adversaire->_degats += $this->_force; idem a :
            if(get_class($adversaire) == "Personnage"){
                $adversaire->_degats += $this ->_force;
                $this->getExperience();
                print('<div class="action">'. $adversaire .'s\'est pris une mandale par ' . $this .' ==> Dégats de '. $adversaire . ' = '. $adversaire .'</div>');
            } else {
                print('|  !! ERROR !!  |');
            }
            return $this;
    }
}