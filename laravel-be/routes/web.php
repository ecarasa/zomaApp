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

// bases y condiciones
Route::get('/basesycond', 'HomeController@show');

//panel paticipante
    //pistas
    Route::get('/pista', 'PistasController@index')->name('index');
    Route::post('/pista/crear', 'PistasController@register')->name('register');
    Route::get('/pista/enviados', 'PistasController@enviados')->name('enviados');
    Route::get('/pista/recibidos', 'PistasController@recibidos')->name('recibidos');
    
//grupos
Route::post('/grupos/crear', 'GruposController@crear')->name('crear');
Route::get('/grupo/{codigoGrupo}', 'GruposController@show')->name('show');
Route::get('/grupo/sortear', 'GruposController@sortear')->name('sortear');

//marketplace
Route::get('/store', 'RegalosController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();