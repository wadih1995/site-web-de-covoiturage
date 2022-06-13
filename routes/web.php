<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Departarrivedropdown;
use App\Http\Livewire\Statecitydropdown;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('passager', function () {
    return view('passager');
});
Route::get('chauffeur', function () {
    return view('chauffeur');
});
Route::get('connexionPassagerChauffeur', function () {
    return view('connexionPassagerChauffeur');
});
Route::get('contacter', function () {
    return view('contacter');
});

Route::get('loginChauffeurPassager', function () {
    return view('loginChauffeurPassager');
});


Auth::routes();
Route::get('departarrivedropdown', Departarrivedropdown::class);

//Route::get('statecitydropdown', Statecitydropdown::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

