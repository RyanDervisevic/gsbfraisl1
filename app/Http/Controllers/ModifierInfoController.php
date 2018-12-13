<?php

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;


class ModifierInfoController extends Controller
{
    public function changeInfo()
    {
        return view('changeinfo');
        
        
    }
    
    
    
}
