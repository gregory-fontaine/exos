<?php

//creation de la classe voiture 
class Voiture extends Vehicule
{

    //on defini le constucteur

    public function __construct(int $anneeModele, float $prix)
    {
        parent::__construct($anneeModele, $prix);        
    }

    //methode demarrer et accelerer
    public function demarrer(){
       echo "la voiture demarre bien ".PHP_EOL;
    } 
    public function accelerer(){
        echo "la voiture accelere bien".PHP_EOL;
    }
    
    //methode tostring
    public function __toString(){
        echo PHP_EOL."--------details de la voiture--------".PHP_EOL ;
        return parent::__toString();
            }
    
}
?>