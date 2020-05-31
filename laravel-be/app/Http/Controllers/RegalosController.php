<?php

namespace App\Http\Controllers;

use App\Regalos;
use App\Categorias;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;

class RegalosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $regalos = Regalos::all();
        //$categorias =     DB::table('categorias')->select('categoria.id, categoria.nombre')->join('regalos', 'categorias.id', '=', 'regalos.categoria')->groupBy('categoria.id','categoria.url','categoria.nombre',DB::raw('count(*) as total'))->orderBy('total')   ;
        $categorias = Categorias::all()->take(4);

        if (Auth::check()) {
            $grupos = $users = DB::table('grupos')
                    ->join('participante_grupos', 'grupos.codigo', '=', 'participante_grupos.codigoGrupo')
                    ->where('participante_grupos.idUsuario', '=', Auth::user()->id)
                    ->select('grupos.codigo', 'grupos.nombre')
                    ->get();
        } else {
            $grupos = null;
        }
        $categoriaSelected = '';
        return view('marketplace')->with(compact('regalos', 'categorias', 'grupos', 'categoriaSelected'));
    }

    public function busquedaCategoria(Request $request, $idCateg) {


        // Todas para el header, pasar a cache desp.
        $categorias = Categorias::all();

        if (Auth::check()) {
            $grupos = $users = DB::table('grupos')
                    ->join('participante_grupos', 'grupos.codigo', '=', 'participante_grupos.codigoGrupo')
                    ->where('participante_grupos.idUsuario', '=', Auth::user()->id)
                    ->select('grupos.codigo', 'grupos.nombre')
                    ->get();
        } else {
            $grupos = null;
        }
        $categoriaSelected = Categorias::where('id', $idCateg)->first();
        if ($categoriaSelected) {
            $regalos = Regalos::where('categoria', $categoriaSelected->id)->get();
            return view('marketplace')->with(compact('regalos', 'categorias', 'grupos', 'categoriaSelected'));
        } else {
            return response(404);
        }
    }

    function filtrarRegalos(Request $req) {

        $categoria = false;
        $importe = false;

        if ((isset($req->categoria_filtro) && $req->categoria_filtro > 0)) {
            $categoria = true;
        }

        if (isset($req->rangoMax_filtro)) {
            $importe = true;
        }


        if ($categoria && $importe) {
            $regalos = Regalos::where('importe', '<', $req->rangoMax_filtro)->where('categoria', '=', $req->categoria_filtro)->select('*')->get();
        }

        if ($categoria && !$importe) {
            $regalos = Regalos::where('categoria', '=', $req->categoria_filtro)->select('*')->get();
        }

        if ($importe && !$categoria) {
            $regalos = Regalos::where('importe', '<', $req->rangoMax_filtro)->select('*')->get();
        }

        $html = '
        <div class="section-header">
            <div class="section-header-info">
                <p class="section-pretitle">Mira todo lo que tenemos para vos</p>
                <h2 class="section-title">Encontramos ' . count($regalos) . ' vouchers para que regales</h2>
            </div>
        </div>
        <div class="grid grid-3-3-3-3 centered" id="grillaRegalos">
        ';
        foreach ($regalos as $regalo) {
            $html = $html . '<div class="product-preview">';
            $html = $html . '<figure class="product-preview-image liquid" style="background: url(' . $regalo->url . ') center center / cover no-repeat;">';
            $html = $html . '<img src="{{ $regalo->url }}" alt="item-01" style="display: none;">';
            $html = $html . '</figure>';
            $html = $html . '<div class="product-preview-info">';
            $html = $html . '<p class="text-sticker"><span class="highlighted">$</span> ' . $regalo->importe . '</p>';
            $html = $html . '<p class="product-preview-title">' . $regalo->nombre . '}</p>';
            $html = $html . '<p class="product-preview-category digital"><a href="marketplace-category.html">' . $regalo->Categoria->nombre . '</a></p>';
            $html = $html . '<p class="product-preview-text">' . $regalo->descripcion . '</p>';
            $html = $html . '<a style="width: 100%;" href="javascript:buyModal(' . $regalo->id . ');"  class="button small twitch blue-ar-l-rn-none">Comprar</a>';
            $html = $html . '</div>';
            $html = $html . '<div class="product-preview-meta">';
            $html = $html . '<div class="product-preview-author">';
            $html = $html . '<p class="product-preview-author-title">By</p>';
            $html = $html . '<p class="product-preview-author-text"><a href="profile-timeline.html">' . $regalo->Empresa->nombre . '</a></p>';
            $html = $html . '</div>';
            $html = $html . '<div class="rating-list">';
            $html = $html . '<div class="rating filled">';
            $html = $html . '<svg class="rating-icon icon-star">';
            $html = $html . '<use xlink:href="#svg-star"></use>';
            $html = $html . '</svg>';
            $html = $html . '</div>';
            $html = $html . '</div>';
            $html = $html . '</div>';
            $html = $html . '</div>';
        }
        $html = $html . '</div>';
        echo $html;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regalos  $regalos
     * @return \Illuminate\Http\Response
     */
    public function show(Regalos $regalos) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regalos  $regalos
     * @return \Illuminate\Http\Response
     */
    public function edit(Regalos $regalos) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regalos  $regalos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regalos $regalos) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regalos  $regalos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regalos $regalos) {
        //
    }

}
