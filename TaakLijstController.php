<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaakLijst;

class TaakLijstController extends Controller
{
    public function index(){
        return view('welcome', ['TakenLijst' => TaakLijst::where('is_compleet', 0)->get()]);
    }
    public function Compleet($id){

        $TaakLijst = TaakLijst::find($id);
        $TaakLijst->is_compleet = 1;
        $TaakLijst->save();

        return redirect('/');
    }

    public function saveTaak(Request $request){

        $nieuweTaak = new TaakLijst;
        $nieuweTaak->Taak = $request->TaakLijst;
        $nieuweTaak->is_compleet = 0;
        $nieuweTaak->save();

        return redirect('/');
    }
}
