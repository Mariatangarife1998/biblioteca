<?php

use App\Models\Permiso;
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
//estamos retornando una vista//
// Route::get('/', function () {//
//     return view('welcome');//
//  });//

// //la URL en este ejemplo seria el food me va a retornar el mensaje//
// que dice hello world estos comandos son tipo closure por que permite una function //
// Route::get('foo', function () {//
//     return 'HOLA ';//
// });
//de esta manera se retorna una vista//
// Route::view('Permiso', 'Permiso');//

// De esta manera se retorna un parametro el cual en este ejemplo seria nombre//
//realizamos una peticion atravez de la url, cuando el parametro no es// 
// //obligatorio si no opcional le anexamos un ? ejm (?Nombre)// 
// Route::get('Permiso/{Nombre}/{Slug?}', 'PermisoController@index');//

//en este codigo estamos pasando un formulario// 
// Route::get('admin/sistema/permiso', 'PermisoController@index')->name('permiso');//


//en esta ruta se cumplen con parametros espesificos de tipo varchar este solo recibe caracter alfabetico//
// Route::get('permiso/{nombre}', function ($nombre) {
//     return $nombre;
// })->where('nombre', '[A-Za-z]+')->name('Permiso');

//en esta ruta nuestra url permite caracteres de tipo number//
// Route::get('permiso/{nombre}', function ($nombre) {
//     return $nombre;
// })->where('nombre', '[0-9]+')->name('Permiso');

Route::get('/', 'InicioController@index');
