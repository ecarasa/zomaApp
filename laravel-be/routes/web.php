<?php

// home
Route::get('/', 'RegalosController@index');
Route::get('/home', 'HomeController@index');

// bases y condiciones
Route::get('/basesycond', 'HomeController@show');

//pistas
Route::get('/pista', 'PistasController@index')->name('index');
Route::post('/pista/crear', 'PistasController@register')->name('register');
Route::get('/pista/enviados', 'PistasController@enviados')->name('enviados');
Route::get('/pista/recibidos', 'PistasController@recibidos')->name('recibidos');
Route::get('/pista/grupos', 'PistasController@grupos')->name('grupos');
Route::get('/pista/mensaje', 'PistasController@mensaje')->name('mensaje');
Route::get('/pista/mensaje/regalo', 'PistasController@mensajeregalo')->name('mensajeregalo');
Route::get('/pista/mensaje/regalo/modal', 'PistasController@modaldinamico')->name('modaldinamico');   
Route::get('/pista/grupodetalle', 'PistasController@grupodetalle')->name('grupodetalle');
Route::get('/pista/what', 'PistasController@enviarw')->name('enviarw');
Route::post('/pista/rp', 'PistasController@responder')->name('responder');
    
//grupos
Route::post('/grupos/crear', 'GruposController@crear')->name('crear');
Route::get('/grupo/{codigoGrupo}', 'GruposController@show')->name('show');
Route::get('/grupo/sortear', 'GruposController@sortear')->name('sortear');
Route::post('/grupo/integrantes/{codigoGrupo}', 'GruposController@integrantes')->name('integrantes');
Route::post('/grupo/regalar', 'GruposController@regalar')->name('regalar');

//marketplace
Route::get('/store/categoria/{categoriaNombre}', 'RegalosController@busquedaCategoria');
Route::get('/store', 'RegalosController@index');

// compras de cupones
Route::get('/buy/{hash}/{CuponCode}/{estado}/success', 'RegalosController@success'); // estado 1
Route::get('/buy/{hash}/{CuponCode}/{estado}/pendind', 'RegalosController@pending'); // estado 2

// cuenta
Route::get('/cuenta', 'UserController@cuenta');
Route::post('/cuenta/edit', 'UserController@updateProfile');

//authenticacion
Auth::routes();