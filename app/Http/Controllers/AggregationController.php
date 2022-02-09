<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Facade;
use App\Models\Factory;
use App\Models\Voiture;
use App\Models\Renault;
use App\Models\Opel;
use App\Models\Aggregation;
use App\Models\Concession;


class AggregationController extends Controller
{
    public function show(){
        $usine = new Factory();
        $voiture1 = $usine->construireVoiture('renault');
        $voiture2 = $usine->construireVoiture('opel');
        $tab=[];
        array_push($tab, $voiture1);
        array_push($tab, $voiture2);
        $aggregation= new Aggregation($tab);
        return view('aggregation', ["agg"=>$aggregation]);
    }
}