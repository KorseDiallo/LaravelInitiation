<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function getListe(){

        $taches= Tache::all();
        return view('taches',["taches"=>$taches]);
    }

}
