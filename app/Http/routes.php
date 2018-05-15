<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ruta de tipo resource agrupa todas las acciones
 create update destroy show edit index
 route::resource('ruta http','nombre_controlador')
 */
Route::resource('almacen/categoria','CategoriaController');


