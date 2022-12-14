<?php

namespace App\Http\Controllers;

//om dingen uit andere files te halen
use Illuminate\Http\Request;
use App\Models\TaakLijst;

class TaakLijstController extends Controller
{
    // funtie om infromatie uit de databse naar de welcome pagina te sturen
    public function index(){
        return view('welcome', ['TakenLijst' => TaakLijst::where('is_compleet', 0)->get()]);
    }
    
    // functie om een taak compleet te zetten in de database
    public function Compleet($id){

        $TaakLijst = TaakLijst::find($id);
        $TaakLijst->is_compleet = 1;
        $TaakLijst->save();

        return redirect('/');
    }

    // functie om de informatie van de taak opteslaan
    public function saveTaak(Request $request){

        $nieuweTaak = new TaakLijst;
        $nieuweTaak->Taak = $request->TaakLijst;
        $nieuweTaak->is_compleet = 0;
        $nieuweTaak->save();

        return redirect('/');
    }
}
