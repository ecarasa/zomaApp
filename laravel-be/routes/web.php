<?php

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

Route::get('/', 'HomeController@index')->name('home');

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('/basesycond', 'BasesController@index')->name('home');;

Route::get('/pista', 'PistasController@index'); //// nombre en url y el nombre del controller.php
=======

// bases y condiciones
Route::post('/basesycond', 'HomeController@show');
>>>>>>> 306ee99bcc13c9c47f18c2a610a91b5446add4a8


//grupos
Route::post('/grupos/crear', 'GruposController@crear')->name('crear');
Route::post('/grupo/{codigoGrupo}', 'GruposController@show')->name('crear');

//marketplace

Route::get('/store', 'RegalosController@index');
