<?php

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;


class NewVisiteurController extends Controller
{
    public function NewVisiteur(request $request)
    {
        $idVisiteur = $request->input('id');
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $adresse = $request->input('adresse');
        $cp = $request->input('cp');
        $ville = $request->input('ville');
        $date = $request->input('dateEmbauche');
        $mail = $request->input('email');
        $telephone = $request->input('telephone');
        $unNVU = new GsbFrais();
        $unNVU->creervisiteur($idVisiteur,$nom, $prenom, $adresse, $cp, $ville, $date, $mail, $telephone);
        
        
        return view('newuser');
        
        
    }
    
    
    
}


