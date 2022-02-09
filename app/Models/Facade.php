<?php

namespace App\Models;

class Facade {

    public function __construct() { 
    }

    public static function commander() {
        $tableau = [];

        $usine = new Factory();
        $voiture1 = $usine->construireVoiture('opel');
        $voiture2 = $usine->construireVoiture('renault');

        $concession= new Concession();
        $concession->AjouterVoiture($voiture1);
        $concession->AjouterVoiture($voiture2);

        $facture= new Facture();
        $facture->ajoutPrixVoiture($voiture1);
        $facture->ajoutPrixVoiture($voiture2);

        $tableau['factory']=$usine;
        $tableau['concession']=$concession;
        $tableau['facture']=$facture;
        
        return $tableau;
    }

  }

  ?>