<?php

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\metier\GsbFrais;


class NewVisiteurController extends Controller
{
    public function NewVisiteur()
    {
        
        
        
        return view('newuser');
        
        
    }
    
    
    
}

