<?php

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;


class ModifierInfoController extends Controller
{
    public function changeInfo(Request $request)
    {
        $login = $request->input('login');
        $gsbFrais = new GsbFrais();
       
            $res = $gsbFrais->getdonnee($login);
             $visiteur = $res[0];
            $adresse = $visiteur->adresse;
            $cp = $visiteur->cp;
            $ville = $visiteur->ville;
            $email = $visiteur->email;
            $telephone = $visiteur->telephone;
            Session::put('adresse', $adresse);
            Session::put('cp', $cp);
            Session::put('email', $email);
            Session::put('telephone', $telephone);
            
        
            
            
        
        
        return view('changeinfo', compact('visiteur'));
        
        
    }
    
    
    
}
