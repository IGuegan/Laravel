<?php

namespace App\Models;

class Opel extends Voiture{

    public $prix;
    public $name;

    public $options = ["Regulateur de vitesse", "Automatique", "Vitre teinté"];

     public function __construct($name, $prix) { 
         parent::__construct($name, $prix);
         $this->name='opel';
         $this->prix=1348;
     }

     public function getName(){
       return $this->name='Opel1';
     }

     public function getPrice(){
      return $this->prix='3384';
    }

    public function getMarque(){
      return "Opel";
    }
  }

?>