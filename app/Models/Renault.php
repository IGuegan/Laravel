<?php

namespace App\Models;

class Renault extends Voiture{

    public $prix;
    public $name;
    
    public $options = ["Regulateur de vitesse", "Automatique", "Vitre teinté"];

     public function __construct($name, $prix) { 
         parent::__construct($name, $prix);
     }

     public function getName(){
      return $this->name='Renault1';
    }

    public function getPrice(){
     return $this->prix='2736';
    }

    public function getMarque(){
      return "Renault";
    }
    
  }

?>
