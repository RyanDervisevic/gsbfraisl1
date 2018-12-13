<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;

class ValiderFicheFraisController extends Controller {
    public function listeFraisValider()
    {
        $unFrais = new GsbFrais();
        $id_visiteur = Session::get('id');
        //récupérer les frais à valider : appeler la fonction du modele
        $mesFrais = $unFrais->listeFraisValider($id_visiteur);
        // On affiche la liste de ces frais       
        return view('validerfichefrais', compact('mesFrais'));
    }
    public function validerfichefrais(Request $request)
    {
        
        
    }
}
