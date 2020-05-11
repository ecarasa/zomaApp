<?php

namespace App\Http\Controllers;

use App\RegalosParticipantes;
use Illuminate\Http\Request;
use App\Regalos;
use App\Categorias;
class RegalosParticipantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    //Route::get('/buy/{hash}/{giftCode}/{estado}/success', 'RegalosController@success'); // estado 1
    //Route::get('/buy/{hash}/{giftCode}/{estado}/pendind', 'RegalosController@pending'); // estado 2
    public function success(Request $request, $hash, $giftCode, $estado)
    {
        /* 
            $table->bigIncrements('id');
            $table->integer('idUserEmisor')->nullable();
            $table->integer('idUserReceptor');
            $table->integer('idRegalo');
            $table->integer('idGrupo');
            $table->longText('idPista')->nullable();
            $table->longText('mensaje')->nullable();
            $table->timestamps();
        */
        if (Auth::id()){

            $regalo = Regalo::where('code', $giftCode)->first();
            



        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegalosParticipantes  $regalosParticipantes
     * @return \Illuminate\Http\Response
     */
    public function show(RegalosParticipantes $regalosParticipantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegalosParticipantes  $regalosParticipantes
     * @return \Illuminate\Http\Response
     */
    public function edit(RegalosParticipantes $regalosParticipantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegalosParticipantes  $regalosParticipantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegalosParticipantes $regalosParticipantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegalosParticipantes  $regalosParticipantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegalosParticipantes $regalosParticipantes)
    {
        //
    }
}
