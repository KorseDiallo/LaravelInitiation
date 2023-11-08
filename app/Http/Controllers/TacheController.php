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

    public function show(Request $req){
        //$tache= Tache::find($req->id);
        $tache= Tache::findOrFail($req->id);
        // dd($tache);
        return view("show",["tacheTrouver"=>$tache]);
    }

    public function terminer(Request $req){
        $tache= Tache::findOrFail($req->id_tache);

        $tache->is_terminer=1;

        $tache->save();

        return back();
    }

    public function create(){
        return view("nouveau");
    }

    public function save(Request $req){
       $tache= new Tache();

       $tache->nom_tache=$req->nom;
       $tache->description_tache=$req->description;
       $tache->date_echeance=$req->date;
       $tache->priorite=$req->priorite;

       if($req->termine){
            $tache->is_terminer=1;
       }else{
            $tache->is_terminer=0;
       }
        
       if($tache->save()){
            return redirect("/tache");
       }
    }

}
