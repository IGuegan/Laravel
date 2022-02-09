<?php

namespace App\Models;

class Voiture {
 
    private $nom;
    private $prix;

    public function __construct($nom, $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function getOptions(){
        foreach($this->options as $option){
            echo " ".$option.", ";
        }
    }

    public function getText(){
        echo $this->getMarque();
        echo $this->getOptions();
    }
}
?>