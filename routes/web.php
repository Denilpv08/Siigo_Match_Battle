<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\SalaController;


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

// inicio
// Route::get('/', function () {
//     return view('welcome');
// });

// moto
// Route::get('/', [MotoController::class, 'index'])->name('moto.index');
// Route::post('/', [MotoController::class, 'index'])->name('moto.index');

// sala
Route::get('/', [SalaController::class, 'index'])->name('sala.index');

Route::get('/usuario/{hexa}', function () {
    $hexa = 0;
       
    // generating 6 times as HTML color code consist
    // of 6 letter or digits
    for ($i = 1; $i <= 16; $i++){
       $hexa = substr(md5(rand()), 0, 16);
    }
   return view('salas.sala', compact('hexa'));
});