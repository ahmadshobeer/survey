<?php

namespace App\Http\Controllers;

use App\Models\ModelCabang;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
  

     public function index()
    {
        $cabangs = ModelCabang::get();
       

        return view('survey',compact('cabangs'));
        
    }
    
}
