<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});
Route::get('/affichage', function () {
    return view('affichage');
});
Route::get('/formulaire', [AfficherControlleur::class, 'AfficherInfo']);	//[Contrôleur::class, 'méthode’]
