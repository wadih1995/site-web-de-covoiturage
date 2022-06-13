<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContact extends Controller
{
    function contact(){
        $d= Contact::all();
        return view('dashboard.admin.home',['d'=>$d]);
        
    }
}

