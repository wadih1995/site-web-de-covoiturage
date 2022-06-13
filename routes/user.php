<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Livewire\Departarrivedropdown;
use App\Http\Livewire\Statecitydropdown;

use App\Http\Livewire\ContactForm;
use App\Http\Livewire\DemandeForm;

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          //Route::get('/home',[Departarrivedropdown::class,'updatedSelectedDepart($depart)'])->name('home');
          Route::get('departarrivedropdown', Departarrivedropdown::class);
          Route::get('statecitydropdown', Statecitydropdown::class);
          //Route::get('voitureheure', Voitureheure::class);
          Route::get('dashboard.user.home', [UserController::class, 'profile']);
          Route::post('dashboard.user.home', [UserController::class, 'update_avatar']);
          //Route::get('/home',[UserController::class,'destfunc'])->name('home');
          Route::get('contact-form', ContactForm::class);
          Route::get('demande-form', DemandeForm::class);
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });

});
