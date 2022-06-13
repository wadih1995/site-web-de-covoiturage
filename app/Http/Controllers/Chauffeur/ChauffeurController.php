<?php

namespace App\Http\Controllers\Chauffeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Chauffeur;
use Illuminate\Support\Facades\Auth;

class ChauffeurController extends Controller
{
    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:chauffeurs,email',
             'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:8',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $chauffeur = new chauffeur();
          $chauffeur->name = $request->name;
          $chauffeur->email = $request->email;
          $chauffeur->phone = $request->phone;
          $chauffeur->password = \Hash::make($request->password);
          $save = $chauffeur->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as chauffeur');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:chauffeurs,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in chauffeurs table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('chauffeur')->attempt($creds) ){
            return redirect()->route('chauffeur.home');
        }else{
            return redirect()->route('chauffeur.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('chauffeur')->logout();
        return redirect('/');
    }
}
