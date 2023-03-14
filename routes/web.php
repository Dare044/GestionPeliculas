<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

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
    return view('welcome');
});


/*Route::get('/pelicula', function () {
    return view('pelicula.index');
});

Route::get('pelicula/create',[PeliculaController::class,'create']);*/

Route::resource('pelicula',PeliculaController::class);