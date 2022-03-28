<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


/*
//ruta vista home
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', 'App\Http\Controllers\PagesController@home'); //ruta vista home

Route::get('/fcrear', 'App\Http\Controllers\FabricanteController@index')->name('fabricante.crear'); //ruta vista fabricante equipo
// Route::get('/modelo', [PagesController::class, 'crearModelo']); //ruta vista modelo equipo

Route::post('/fguardar', 'App\Http\Controllers\FabricanteController@guardar')->name('fabricante.guardar'); //ruta vista fabricante equipo
// Route::get('/modelo', [PagesController::class, 'crearModelo']); //ruta vista modelo equipo

Route::get('/mcrear', 'App\Http\Controllers\PagesController@crearModelo')->name('modelo.crearModelo'); //ruta vista modelo equipo
// Route::get('/modelo', [PagesController::class, 'crearModelo']); //ruta vista modelo equipo

Route::get('contacto', function () {
    return "Hola pagina de contacto";
});

//ruta de funcion con parametro
Route::get('saludo/{nombre}', 'App\Http\Controllers\PagesController@saludo')->where('nombre', "[A-Za-z]+");;
    //return "Hola saludos $nombre";

   // return view('saludo', ['nombre' => $nombre]);
  //  return view('saludo')->with(['nombre' => $nombre]);
   // return view('saludo', compact('nombre'));
 //validar la entrada de texto