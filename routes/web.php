<?php

use App\Http\Controllers\AfficherControlleur;
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
Route::get('/formulaire', function () {
    return view('formulaire');
});
Route::get('/formulaireControlleur', [AfficherControlleur::class, 'AfficherInfo']);	//[Contrôleur::class, 'méthode’]
