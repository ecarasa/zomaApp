<?php

namespace App\Http\Controllers;

use App\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
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
     * @param  \App\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show(Empresas $empresas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresas $empresas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresas $empresas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresas $empresas)
    {
        //
    }

    public function listarRegalosVendidos (Request $request) {

        $regalosenviados = DB::table('regalos_participantes as r')->where('r.idUserEmisor','like',$request->idEmisor)
        ->join('regalos as r2', 'r2.id', '=', 'r.idRegalo')
        ->join('empresas as e', 'e.id', '=', 'r2.empresa')
        ->join('users as u', 'u.id', '=', 'r.idUserReceptor')
        ->select('r.*','r2.url','r2.nombre','r2.descripcion','e.nombre as empresa','r2.importe','u.name as receptor','u.email as eReceptor')
        ->orderby('r.id' ,'desc')
        ->get();
        return view('grid_regalosenviados')->with(compact('regalosenviados'));
    }
}
