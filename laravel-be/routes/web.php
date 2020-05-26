<?php

// home
//Route::get('/', 'RegalosController@index');
Route::get('/', 'HomeController@index');


// bases y condiciones
Route::get('/basesycond', 'HomeController@show');

//pistas
Route::get('/pista', 'PistasController@index')->name('index');
Route::get('/home', 'PistasController@index')->name('index');

Route::get('/jugar', 'PistasController@index')->name('index');
Route::post('/pista/crear', 'PistasController@register')->name('register');
Route::get('/pista/enviados', 'PistasController@enviados')->name('enviados');
Route::get('/pista/recibidos', 'PistasController@recibidos')->name('recibidos');
Route::get('/pista/grupos', 'PistasController@grupos')->name('grupos');
Route::get('/pista/creargrupo', 'GruposController@mostrardesdepista')->name('mostrardesdepista');
Route::get('/pista/mensaje', 'PistasController@mensaje')->name('mensaje');
Route::get('/pista/mensaje/regalo', 'PistasController@mensajeregalo')->name('mensajeregalo');
Route::get('/pista/mensaje/regalo/modal', 'PistasController@modaldinamico')->name('modaldinamico');   
Route::get('/pista/grupodetalle', 'PistasController@grupodetalle')->name('grupodetalle');
Route::get('/pista/what', 'PistasController@enviarw')->name('enviarw');
Route::post('/pista/rp', 'PistasController@responder')->name('responder');
Route::get('/pista/regalosenviados', 'PistasController@regalosenviados')->name('regalosenviados');
    
//grupos
Route::get('/grupos/crear', 'GruposController@index')->name('index');
Route::post('/grupos/crear', 'GruposController@crear')->name('crear');
Route::get('/grupo/{codigoGrupo}', 'GruposController@show')->name('show');
Route::post('/grupo/sortear', 'GruposController@sortear')->name('sortear');
Route::post('/grupo/integrantes/{codigoGrupo}', 'GruposController@integrantes')->name('integrantes');
Route::post('/grupo/regalar', 'GruposController@regalar')->name('regalar');
Route::post('/grupo/cambiarestado/2', 'GruposController@iniciar')->name('iniciar');
Route::post('/grupo/cambiarestado/3', 'GruposController@finalizar')->name('finalizar');
Route::get('/grupos/resultados', 'GruposController@resultados')->name('resultados');
Route::get('/grupo/testsql/t', 'GruposController@testsql')->name('testsql');
Route::post('/grupo/terminar', 'GruposController@terminar')->name('terminar');
Route::post('/grupo/agregarparticipante', 'GruposController@agregarParticipante')->name('agregarParticipante');

//marketplace
Route::get('/store/categoria/{categoriaNombre}', 'RegalosController@busquedaCategoria');
Route::get('/store', 'RegalosController@index');

// compras de cupones
Route::get('/buy/{hash}/{CuponCode}/{estado}/success', 'RegalosController@success'); // estado 1
Route::get('/buy/{hash}/{CuponCode}/{estado}/pendind', 'RegalosController@pending'); // estado 2

// cuenta
Route::get('/cuenta', 'UserController@cuenta')->name('cuenta');
Route::post('/cuenta/edit', 'UserController@updateProfile')->name('editcuenta');

//authenticacion
Auth::routes();