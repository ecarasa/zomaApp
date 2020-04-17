<?php

namespace App\Http\Controllers;

use App\Pistas;
use Illuminate\Http\Request;

class PistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
     return view('pista');
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
