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
use App\Models\Sujet;
use App\Models\Observer;


class TemplateController extends Controller
{
    public function show()
    {
        $voiture1 = Factory::construireVoiture('opel');
        $voiture2 = Factory::construireVoiture('renault');
        return view('template', ['voiture1' => $voiture1, 'voiture2' => $voiture2]);
    }
}