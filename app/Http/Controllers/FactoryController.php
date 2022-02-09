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


class FactoryController extends Controller
{
    public function show()
    {
        $opel = new Factory();
        $opel->construireVoiture('opel');
        $renault = new Factory();
        $renault->construireVoiture('renault');
        return view('factory', ['opel' => $opel, 'renault' => $renault]);
    }
}