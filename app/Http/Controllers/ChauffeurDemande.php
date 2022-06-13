<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;

class ChauffeurDemande extends Controller
{
    function demande(){
        $data= Demande::all();
        return view('dashboard.chauffeur.home',['data'=>$data]);
        
    }
}

