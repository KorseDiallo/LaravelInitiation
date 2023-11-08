<?php

use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

// Route::get('/tache', function () {
//     return view('taches');
// });

Route::get('/tache', [TacheController::class,"getListe"]);


Route::get("/tache/{id}/details",[TacheController::class,"show"]);

Route::get("/tache/termine/{id_tache}",[TacheController::class,"terminer"]);