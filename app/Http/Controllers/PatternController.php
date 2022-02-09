<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatternController extends Controller
{

    public function show($n)
    {
        return view('pattern')->with('numero', $n);
    }

}