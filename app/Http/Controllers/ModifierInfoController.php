<?php

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;


class ModifierInfoController extends Controller
{
    public function changeInfo(Request $request)
    {
        $login = Session::get('login');
        $cp = Session::get('cp');
        $ville = Session::get('ville');
        $mail = Session::get('email');
        $tel = Session::get('telephone');
        $uneInfo = new GsbFrais();
        $uneModifInfo = $uneInfo->setdonnee($login,$cp,$ville,$mail,$tel);
       // print_r($unFraisHorsForfait);
        
            
            
        
        
        return view('changeinfo');
        
        
    }
    
    
    
}
