<?php

namespace App\Http\Controllers;

use App\Grupos;
use App\Regalos;
use App\User;
use App\RegalosParticipantes;
use App\ParticipanteGrupos;
use Illuminate\Http\Request;
use DB;
use Auth;
use Debugbar;
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
        if (!$request->has(['idGrupo'])) {
            $output = array("status"=>false, "msj"=>"Faltan datos");
            return response()->json($output);
        }else{

            $grupo = Grupos::findOrFail($request->idGrupo);

            // TODO -> validacion de quien esta sorteando que sea el admin.
            //if( $grupo->idUsuarioAdmin == Auth::id() ){

            // TODO
            // Falta un IF para saber si se sorteo, si se sorteo, no se puede volver a sortear o si ?    
            
            $participantes = $grupo->getParticipantes;
            $participantesTemp = $participantes->toArray();

            foreach ($participantes as $participante){
                $randIndex = $this->selRandomFromArray($participantesTemp, $participante->mail);
                $amigoInvDelEach = $participantesTemp[$randIndex]; 
                echo $participante->email . ' tiene de amigo a ' . $amigoInvDelEach['email'].'<br>';
                $pivotTable = ParticipanteGrupos::where('idUsuario', $participante->id)->where('codigoGrupo',$grupo->codigo)->first();
                $pivotTable->idUserAmigoInvible = $amigoInvDelEach['id'];
                $pivotTable->save();
                unset($participantesTemp[$randIndex]);
            }
        }
    }

    /*
    * funcion devuelve random de un array exepto el que tenga el mail XXXX 
    */

    function selRandomFromArray($arr, $emailNot) {
        $index = array_rand($arr);
        $emailRand = $arr[$index]['email'];

        if ($emailRand == $emailNot){
            $this->selRandomFromArray($arr, $emailNot);
        }else{
            return $index;
        }
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
        //Route::get('/grupo/{codigoGrupo}', 'GruposController@show')->name('show');
        $grupo = Grupos::where('codigo', $codigoGrupo)->get();
        
        if ($grupo->soyIntegrante(Auth::user()->id)){
            echo 'ok soy';
        }else{
            echo 'tomatelas';
        }

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

    public function integrantes(Request $request, $codigoGrupo)
    {
        //Route::get('/grupo/{codigoGrupo}', 'GruposController@show')->name('show');
        $grupo = Grupos::where('codigo', $codigoGrupo)->get();

        Debugbar::info($grupo);




            $grupos = $users = DB::table('grupos')
            ->join('participante_grupos', 'grupos.codigo', '=', 'participante_grupos.codigoGrupo')
            ->join('users', 'users.id', '=', 'participante_grupos.idUsuario')
            ->where('participante_grupos.idUsuario', '=', Auth::user()->id)
            ->select('users.name', 'users.id')
            ->get();

            return json_encode($grupos);
        
        

    }



    public function regalar(Request $request)
    {

        if (!$request->has(['grupo_regalo','idRegalo', 'amigo_a_regalar'])) {
            return response()->json([
                'boton' => null,
                'status' => 'Faltan datos'
            ], 400); 
        }else{
        
        $grupo = Grupos::where('codigo', $request->grupo_regalo)->get();
        $regalo = Regalos::where('id', $request->idRegalo)->get();
        $amigo = User::where('id', $request->amigo_a_regalar)->get();
        

        
        $tmp = new RegalosParticipantes();
        $tmp->idUserEmisor =  Auth::user()->id;
        
        $tmp->idUserReceptor = $amigo->get(0)->id;
       $tmp->idRegalo = $regalo->get(0)->id;
       $tmp->idGrupo = $grupo->get(0)->id;
       $tmp->idPista = 0;

     if ($tmp->save()){
            return response()->json([
                'boton' => $regalo->botondepago,
                'status' => true
            ],200);
        }else{
            return response()->json([
                'boton' => null,
                'status' => 'Hubo un error. Intenta de nuevo'
            ], 400); 
        } 


    }

    }

}
