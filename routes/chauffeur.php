<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chauffeur\ChauffeurController;
use App\Http\Controllers\ChauffeurDemande;





Route::prefix('chauffeur')->name('chauffeur.')->group(function(){
       
    Route::middleware(['guest:chauffeur','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.chauffeur.login')->name('login');
          Route::view('/register','dashboard.chauffeur.register')->name('register');
          Route::post('/create',[ChauffeurController::class,'create'])->name('create');
          Route::post('/check',[ChauffeurController::class,'check'])->name('check');
    });

    Route::middleware(['auth:chauffeur','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.chauffeur.home')->name('home');
        Route::post('/logout',[ChauffeurController::class,'logout'])->name('logout');
        Route::get('/home',[ChauffeurDemande::class,'demande'])->name(' demande');
    });

});