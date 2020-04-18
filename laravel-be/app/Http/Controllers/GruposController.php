<?php

namespace App\Http\Controllers;

use App\Grupos;
use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class GruposController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sortear(Request $request )
    {
        
        






    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request)
    {
        // if (Auth::check()) {
   
        if (!$request->has(['nombreGrupo', 'email', 'fechaFin', 'maxDinero'])) {
            $output = array("status"=>false, "msj"=>"Faltan datos");
            return response()->json($output);
        }else{

            $usuario  = User::where('email', '=', $request->email)->first();

            if (!$usuario){
                // sino existe lo damos de alta
                $usuario = new User();
                $usuario->email = $request->email;
                $usuario->save();
            }

            $grupo = new Grupos();
            $grupo->nombre = $request->nombreGrupo;
            $grupo->estado = 1; //activo ?
            $grupo->fechaFin = $request->fechaFin;
            $grupo->maxDinero = $request->maxDinero;
            $grupo->idUsuarioAdmin = $usuario->id;
            // falta hacer logica para cheaquear que no exista 
            // ya en la Db el codigo recien generado
            $grupo->codigo = rand(10000,99999);
            
            if ($grupo->save()){

                $output = array("status"=>true,"msj"=>"Perfecto, grupo creado. Ahora invita a tus amigos.", "codigoGrupo"=>$grupo->codigo );
                return response()->json($output);
                // EN LUGAR DE DEVOLVER UN JSON, PODRIAMOS REENVIARLO 
                //A LA RUTA DE ADMINISTRCION DEL GRUPO 
                //return view('grupoDetalle'); + compact para mandarle info del grupo
                // googlear return view compact data laraval para ver ejemplos

            }else{
                $output = array("status"=>false, "msj"=>"Error.");
                return response()->json($output);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $codigoGrupo)
    {
        $grupo = Grupos::where('codigo', $codigoGrupo)->get();

        return $grupo;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupos $grupos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupos $grupos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupos $grupos)
    {
        //
    }
}
