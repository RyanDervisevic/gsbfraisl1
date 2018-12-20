<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;

class ValiderFicheFraisController extends Controller {
    public function listeFraisValider(Request $request)
    {
        $region = Session::get('region');
        $unFrais = new GsbFrais();
        //récupérer les frais à valider : appeler la fonction du modele
        $mesFrais = $unFrais->listeFraisValider($region);
        // On affiche la liste de ces frais       
        return view('validerfichefrais', compact('mesFrais'));
    }
    public function voirDetailFraisValider($mois,$idVisiteur){
      $gsbFrais = new GsbFrais();
      $lesFraisForfait = $gsbFrais->getLesFraisForfait($idVisiteur, $mois);
      $lesFraisHorsForfait = $gsbFrais->getLesFraisHorsForfait($idVisiteur, $mois);
      $montantTotal = 0;
      foreach ($lesFraisHorsForfait as $fhf){
            $montantTotal = $montantTotal + $fhf->montant;
      }
      $titreVue = "Détail de la fiche de frais du mois ".$mois;
      return view('listeDetailFicheValider', compact('lesFraisForfait', 'lesFraisHorsForfait', 'mois', 'titreVue','montantTotal', 'idVisiteur'));
    }
    public function validerfichefrais($mois,$idVisiteur)
    {
        $gsbFraisVal = new GsbFrais();
        $updatevalider = $gsbFraisVal->validerFraisValider($mois, $idVisiteur);
        return view('validation', compact('mois', 'idVisiteur'));
        
    }
}
