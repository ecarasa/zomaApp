<?php

namespace App\Http\Controllers;

use App\Regalos;
use App\Categorias;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

use DB;

class RegalosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regalos = Regalos::all();
        $categorias = Categorias::all();
        
        $grupos = $users = DB::table('grupos')
                    ->join('participante_grupos', 'grupos.codigo', '=', 'participante_grupos.codigoGrupo')
                    ->where('participante_grupos.idUsuario', '=', Auth::user()->id)
                    ->select('grupos.codigo', 'grupos.nombre')
                    ->get();

        return view('marketplace')->with(compact('regalos','categorias','grupos'));
    }


    public function busquedaCategoria(Request $request, $nombreCateg){


        // Todas para el header, pasar a cache desp.
        $categorias = Categorias::all();

        
        $categoriaSelected = Categorias::where('nombre', $nombreCateg)->first();
        if ($categoriaSelected){
            $regalos = Regalos::where('categoria', $categoriaSelected->id)->get();
            return view('marketplace')->with(compact('regalos','categorias'));
        }else{
            return response(404);
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
     * @param  \App\Regalos  $regalos
     * @return \Illuminate\Http\Response
     */
    public function show(Regalos $regalos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regalos  $regalos
     * @return \Illuminate\Http\Response
     */
    public function edit(Regalos $regalos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regalos  $regalos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regalos $regalos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regalos  $regalos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regalos $regalos)
    {
        //
    }
}
