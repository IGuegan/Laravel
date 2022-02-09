<?php

namespace App\Models;


class Concession
{

    private $garage = [];

    public function __construct(){}

    public function AjouterVoiture($voiture){
        $this->garage[] = $voiture;
    }

    public function getVoitures(){
        return $this->garage;
    }

    public function getIterateur() {
        return new Agregation($this->garage);
    }

}