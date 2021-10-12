<?php
final class MagicienVoleur extends Personnage implements Volage{
    
    public function faireLesPoches(Personnage $PersoVole, int $montantVole){
        
        $this->setPoche(($this->getPoche()) + $montantVole ); //le voleur ajoute l'argent volé
        
        $PersoVole->setPoche(($PersoVole->getPoche()) - $montantVole); //le volé perd l'argent volé
    
    }
    
    public function courir(){
        
    }

    public function attaquer(Personnage $persoAttaque): Personnage  //on va réecrire sur la class perso MAIS il faut renvoyer la meme chose (ici : Personnage)
    {
        $persoAttaque->setDegats($persoAttaque->getDegats()+ $this->getForce()) ;
        // print($persoAttaque->getNom()." S'est fai voler ".$persoAttaque->getPoche()." balles par ". $this->getNom());
        //$this->faireLesPoches($persoAttaque, $persoAttaque->getPoche()); //$this appel la methode de la même classe
        //parent::attaquer($persoAttaque); //appel une fonction du parent
        return $this;
    }

    public function insulter()
    {
        print("</br>" .$this->getNom() . " : Je vais te dépouiller !");
    }
}