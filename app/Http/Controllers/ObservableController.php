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


class ObservableController extends Controller
{
    public function show()
    {
        $sujet = new Sujet();
        $observer1 = new Observer();
        $observer2 = new Observer();
        $sujet->ajout($observer1);
        $sujet->ajout($observer2);
        $sujet->notify();
        $sujet->supprimer();
        $sujet->notify();

        return view('observable', ["observer1"=>$observer1, "observer2"=>$observer2]);
    }
}