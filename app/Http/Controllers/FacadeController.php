<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Facade;

class FacadeController extends Controller
{
    public function show()
    {
        $facade = new Facade();
        $tableau = $facade->commander();
        return view('facade', ["factory" => $tableau['factory'], "concession" => $tableau['concession'], "facture" => $tableau['facture']]);
    }
}