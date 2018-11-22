<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;

class modifMdpController extends Controller {
    
    $login = $request->input('login');
    $gsbFrais = new GsbFrais();
    
            if ($nouveauMdp == $NouveauMdp2)
            {
                $erreur = "Le nouveau mot de passe doit être différent de l'ancien mot de passe";
                Session::flash('erreur',$erreur);
                return back()->withInput($request->except('ancienMdp'))
            }
            elseif($nouveauMdp != NouveauMdp2)
            {
                $erreur="Vous devez saisir 2 fois le mem mdp";
                Session:flash('erreur', $erreur);
                return back()->withInput($request->except('ancienMdp'))
            }
        }
}