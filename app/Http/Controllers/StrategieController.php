<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Facade;
use App\Models\Factory;
use App\Models\Voiture;
use App\Models\Renault;
use App\Models\Opel;
use App\Models\FactureLine;
use App\Models\StrategieOpel;
use App\Models\StrategieRenault;

class StrategieController extends Controller
{

    public function show(){
        $opel = Factory::construireVoiture('opel');
        $renault = Factory::construireVoiture('renault');
        
        $factureLineOpel = new FactureLine($opel);
        $factureLineRenault = new FactureLine($renault);

        return view('strategie', ['opel' => $factureLineOpel->getFactureLine(), 'renault' => $factureLineRenault->getFactureLine()]);
    }
}