<?php

namespace App\Models;

class FactureLine {

    protected $voiture;
    protected $tva;
    private $strategie;

    public function __construct($voiture){
        if($voiture->getMarque() == "Opel"){
            $this->strategie = new StrategieOpel;
        }
        elseif($voiture->getMarque() == "Renault"){
            $this->strategie = new StrategieRenault;
        }
    }

    public function getFactureLine(){
        return $this->strategie->getTVA();
    }

  }

  ?>