<?php

namespace App\Http\Controllers;

use App\Pistas;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;


class PistasController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Pistas::all();
        return view('pista')->with(compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app');
    }
    /** 
     * function para crear registro de mensaje/pista
    */
    public function register ( Request $request )
    {
        $pista =  new Pistas(); 
        $pista->idUserEmisor=$request->emisor;
        $pista->idUserReceptor=$request->emisor;
        $pista->mensaje=$request->pistamsj;
        //$pista->fecha=getdate();
        if ($pista->save()){

                $output = array("status"=>true,"msj"=>"Pista Enviada!" );
                return response()->json($output);
                // EN LUGAR DE DEVOLVER UN JSON, PODRIAMOS REENVIARLO 
                //A LA RUTA DE ADMINISTRCION DEL GRUPO 
             
                // googlear return view compact data laraval para ver ejemplos

            }else{
                $output = array("status"=>false, "msj"=>"Error.");
                return response()->json($output);
            }
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
     * @param  \App\Pistas  $pistas
     * @return \Illuminate\Http\Response
     */
    public function show(Pistas $pistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pistas  $pistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pistas $pistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pistas  $pistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pistas $pistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pistas  $pistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pistas $pistas)
    {
        //
    }
}
