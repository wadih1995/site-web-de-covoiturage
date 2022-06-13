<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;
use App\Models\Contact;
class AdminReclamation extends Controller
{
    function reclamation(){
        $data= Reclamation::all();
        return view('dashboard.admin.home',['data'=>$data]);
        
    }
 
}
