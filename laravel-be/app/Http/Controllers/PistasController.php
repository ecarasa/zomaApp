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
    public function index( request $request )
    { 
        //$mensajes = Pistas::all();

        $mensajes = DB::table('pistas')->where('idUserEmisor','like',$request->idUser)
                    ->join('users', 'pistas.idUserEmisor', '=', 'users.id')
                    ->join('users as u2', 'pistas.idUserReceptor', '=', 'u2.id') 
                    ->join('grupos as g', 'pistas.idGrupo', '=', 'g.id')
                    ->select('pistas.*', 'users.email' ,'u2.email as receptor','g.nombre as GrupoNombre' )
                    ->get();

        $userLogueado=$request->idUser;
        $grupos =  DB::table('participante_grupos as pg')->where('idUsuario','like',$userLogueado)
                    ->join('users', 'pg.idUserAmigoInvible', '=', 'users.id')
                    ->join('grupos as g', 'g.codigo', '=', 'pg.codigoGrupo')
                    ->select('pg.id','g.nombre as codigoGrupo','pg.idUserAmigoInvible','users.email'  )                    
                    ->get();

        $users = DB::table('users')->where('id','like',$userLogueado)->select('name as nombre')->get();

        return view('pista')->with(compact('mensajes','userLogueado','grupos','users'));
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
        $pista->idUserReceptor=$request->receptor;
        $pista->mensaje=$request->pistamsj;
        //$pista->fecha=getdate();
        $pista->idgrupo=$request->grupo;
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
