<?php

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
    return view('carta1');
});

Route::get('/carta2', function () {
    return view('carta2');
});

Route::get('/carta3', function () {
    return view('carta3');
});

Route::get('/carta4', function () {
    return view('carta4');
});

Route::get('/carta5', function () {
    return view('carta5');
});

Route::get('/carta6', function () {
    return view('carta6');
});

Route::get('/carta7', function () {
    return view('carta7');
});

Route::get('/carta8', function () {
    return view('carta8');
});

Route::get('/maqueta', function () {
    return view('maqueta');
});

Route::get('/usuarios', function(){
    return view('usuarios.index');
});
