<?php

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;


class ModifierInfoController extends Controller
{
    public function changeInfo(Request $request)
    {
        
        $id = Session::get('id');
        $adresse = $request->input('adresse');
        $cp = $request->input('cp');
        $ville = $request->input('ville');
        $mail = $request->input('email');
        $telephone = $request->input('telephone');
        
        $uneModifa = new GsbFrais();
        $uneModifa->setdonnee($id,$adresse,$cp,$ville,$mail,$telephone);
   
        
        return view('changeinfo');
 
    }
    public function ancienInfo()
    {
        $id = Session::get('id');
        Session::put('adresse');
        Session::put('cp');
        Session::put('ville');
        Session::put('telephone');
        Session::put('email');
        $uneModifan = new GsbFrais();
        $uneModifan->getdonnee($id);
        
    }
    
    
}
