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

Route::get('/basesycond', 'BasesController@index')->name('home');

Route::get('/pista', 'PistasController@index'); //// nombre en url y el nombre del controller.php


//grupos
Route::post('/grupos/crear', 'GruposController@crear')->name('crear');
Route::post('/grupo/{codigoGrupo}', 'GruposController@show')->name('crear');

//marketplace

Route::get('/store', 'RegalosController@index');
