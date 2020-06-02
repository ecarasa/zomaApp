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
use Illuminate\Support\Facades\Hash;

class GruposController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('app');
    }

    public function mostrardesdepista() {
        return view('admingrupocrear');
    }

    /**
     * 
     * 
     */
    public function resultados(request $request) {
        $grupos = DB::table('participante_grupos as pg')
                ->where('g.id', 'like', $request->idgrupo)
                ->join('users as u', 'pg.idUsuario', '=', 'u.id')
                ->join('users as ai', 'pg.idUserAmigoInvible', '=', 'ai.id')
                ->join('grupos as g', 'g.codigo', '=', 'pg.codigoGrupo')
                ->select('g.id'
                        , 'g.nombre as NombreGrupo', 'pg.idUserAmigoInvible', 'u.email as usuario', 'u.name as usuarioN', 'u.telefono as usuarioT', 'g.fechaFin', 'g.codigo', 'g.estado', 'ai.name as amigoinvisible', 'ai.email as amigoinvisible_email'
                )
                ->get();

        return view('pista_gruporesultados')->with(compact('grupos'));
    }

    /**
     * 
     * 
     */
    public function testsql() {
        $grupo = Grupos::where('id', 38)->first();
        $datos = $grupo->checkgrupoAmigos(38);
        $participantes = ParticipanteGrupos::where('codigogrupo', '22972')->get();
        return view('testsql')->with(compact('datos', 'participantes'));
    }

    /**
     * funcion que cambia el estado de un grupo - 1 para iniciado - 2 para terminado
     */
    public function CambiarEstadoGrupo($estado, $idgrupo) {

        $grupo = Grupos::where('id', $idgrupo)->first();

        // si la operacion es 2 debo verificar antes de iniciar el juego que todos tengan un amigo invisible asignado
        if ($estado == 2) {
            $tienentodosamigo = $grupo->checkgrupoAmigos($idgrupo);
            if ($tienentodosamigo > 0) {
                return false;
            }
        }

        $grupo->estado = $estado;
        if ($grupo->save())
            return true;

        return false;
    }

    /**
     * Marco como terminado un grupo  
     */
    public function finalizar(request $request) {
        $pudecerrar = GruposController::CambiarEstadoGrupo(3, $request->idgrupo); // lo paso a iniciado
        if (!$pudecerrar)
            $output = array("status" => false, "msj" => "No se pudo cerrar el grupo");
        else
            $output = array("status" => true,
                "msj" => "Grupo Terminado", "idgrupo" => $request->idgrupo,
                "fechafin" => "sin definir", "op" => 3);
        return response()->json($output);
    }

    /**
     * Marco como iniciado un grupo iniciado = 1 ; para terminar es iniciado =2
     */
    public function iniciar(request $request) {
        $pudeiniciar = GruposController::CambiarEstadoGrupo(2, $request->idgrupo); // lo paso a iniciado
        if (!$pudeiniciar)
            $output = array("status" => false, "msj" => "No se pudo iniciar el grupo");
        else
            $output = array("status" => true, "msj" => "Grupo Iniciado", "idgrupo" => $request->idgrupo
                , "fechafin" => "sin definir", "op" => 2
            );
        return response()->json($output);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agregarParticipante(request $request) {
        $gruposfns = Grupos::where('codigo', $request->codgrupo)->first();
        $participanteId = $gruposfns->existeEmail($request->email, $request->codgrupo);
        /* si no existe el usuario lo doy de alta */
        if ($participanteId == 0) {
            $user = User::create([
                        'name' => $request->nombreusuario,
                        'email' => $request->email,
                        'password' => Hash::make('1234'),
                        'telefono' => $request->telefono,
                        'forzarcambioclave' => 99 // como es un invitado y la cuenta no existia le voy a pedir clave nueva con captha=codigo grupo
            ]);
            $participanteId = $user->id;
            $enviaremail = $user->EmailBienvenida($user);
            //envio email de bievenida
        }

        /* chekeo que el idusuario no exista en este grupo */
        if ($gruposfns->soyIntegrante($participanteId, $request->codgrupo)) {
            /* salgo y aviso */
            $output = array("status" => false, "msj" => "Este participante ya existe en este Grupo");
            return response()->json($output);
        }


        /* asociarlo al grupo */
        $participante = new ParticipanteGrupos();
        $participante->idUsuario = $participanteId;
        $participante->codigoGrupo = $request->codgrupo;
        $participante->idUserAmigoInvible = 0;
        $participante->idregalo = 0;

        if ($participante->save()) {
            $output = array("status" => true, "msj" => "Participante agregado", "idgrupo" => $gruposfns->id);
            return response()->json($output);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sortear(Request $request) {
        if (!$request->has(['idGrupo'])) {
            $output = array("status" => false, "msj" => "Faltan datos");
            return response()->json($output);
        } else {

            $grupo = Grupos::findOrFail($request->idGrupo);

            // TODO -> validacion de quien esta sorteando que sea el admin.
            //if( $grupo->idUsuarioAdmin == Auth::id() ){
            // TODO
            // Falta un IF para saber si se sorteo, si se sorteo, no se puede volver a sortear o si ?    

            $participantes = $grupo->getParticipantes;
            $participantesTemp = $participantes->toArray();

            foreach ($participantes as $participante) {
                $randIndex = $this->selRandomFromArray($participantesTemp, $participante->mail);
                $amigoInvDelEach = $participantesTemp[$randIndex];
                //echo $participante->email . ' tiene de amigo a ' . $amigoInvDelEach['email'].'<br>';
                $pivotTable = ParticipanteGrupos::where('idUsuario', $participante->id)->where('codigoGrupo', $grupo->codigo)->first();
                $pivotTable->idUserAmigoInvible = $amigoInvDelEach['id'];
                if (!$pivotTable->save())
                    $output = array("status" => false, "msj" => "Error al sortear");
                unset($participantesTemp[$randIndex]);
            }
            /* lo dejo en estado sorteado */
            $pudesortear = GruposController::CambiarEstadoGrupo(1, $request->idGrupo);
            if ($pudesortear)
                $output = array("status" => true);
            else
                $output = array("status" => false, "msj" => "Error al cambiar estado de grupo realice el sorte nuevamente.");

            return response()->json($output);
        }
    }

    /*
     * funcion devuelve random de un array exepto el que tenga el mail XXXX 
     */

    function selRandomFromArray($arr, $emailNot) {
        $index = array_rand($arr);
        $emailRand = $arr[$index]['email'];

        if ($emailRand == $emailNot) {
            $this->selRandomFromArray($arr, $emailNot);
        } else {
            return $index;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $request) {
        // if (Auth::check()) {

        if (!$request->has(['nombreGrupo', 'fechaFin', 'maxDinero'])) {
            $output = array("status" => false, "msj" => "Faltan datos");
            return response()->json($output);
        } else {


            $idUsuarioCreador = 0;
            if (!Auth::check()) {
                $usuario = User::where('email', '=', $request->email)->first();

                if (!$usuario) {
                    // sino existe lo damos de alta
                    $usuario = new User();
                    $usuario->email = $request->email;
                    $usuario->save();
                    $idUsuarioCreador = $usuario->id;
                } else
                    $idUsuarioCreador = $usuario->id;
            } else
                $idUsuarioCreador = Auth::user()->id;

            $grupo = new Grupos();
            $grupo->nombre = $request->nombreGrupo;
            $grupo->estado = 0; // 0 creado 1 sorteado 2 iniciado  3 terminado
            $grupo->fechaFin = $request->fechaFin;
            $grupo->maxDinero = $request->maxDinero;
            $grupo->idUsuarioAdmin = $idUsuarioCreador;
            $grupo->iniciado = 0;
            // falta hacer logica para cheaquear que no exista 
            // ya en la Db el codigo recien generado
            $grupo->codigo = rand(10000, 99999);

            if ($grupo->save()) {

                $output = array("status" => true, "msj" => "Perfecto, grupo creado. Ahora invita a tus amigos.",
                    "codigo" => $grupo->codigo, "idgrupo" => $grupo->id);

                $tmp = new ParticipanteGrupos();

                $tmp->codigoGrupo = $grupo->codigo;
                $tmp->idUsuario = $idUsuarioCreador;
                $tmp->idUserAmigoInvible = 0;
                $tmp->idRegalo = 0;

                $tmp->save();

                return response()->json($output);

                // EN LUGAR DE DEVOLVER UN JSON, PODRIAMOS REENVIARLO 
                //A LA RUTA DE ADMINISTRCION DEL GRUPO 
                //return view('grupoDetalle'); + compact para mandarle info del grupo
                // googlear return view compact data laraval para ver ejemplos
            } else {
                $output = array("status" => false, "msj" => "Error.");
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
    public function show(Request $request, $codigoGrupo) {



        //Route::get('/grupo/{codigoGrupo}', 'GruposController@show')->name('show');
        $grupo = Grupos::where('codigo', $codigoGrupo)->first();
        if (!empty($grupo))
            if ($grupo->soyIntegranteAdmin(Auth::user()->id, $codigoGrupo)) {
                return view('admingrupo')->with(compact('grupo'));
            } else {
                return view('app');
            }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupos $grupos) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupos $grupos) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function integrantes(Request $request, $codigoGrupo) {
        $grupo = Grupos::where('codigo', $codigoGrupo)->get();


        $usuariosParticipantes = DB::table('grupos')
                ->join('participante_grupos', 'grupos.codigo', '=', 'participante_grupos.codigoGrupo')
                ->join('users', 'users.id', '=', 'participante_grupos.idUsuario')
                ->where('participante_grupos.codigoGrupo', '=', $codigoGrupo)
                ->select('users.name', 'users.id')
                ->get();

        return json_encode($usuariosParticipantes);
    }

    public function regalar(Request $request) {

        if (!$request->has(['grupo_regalo', 'idRegalo', 'amigo_a_regalar'])) {
            return response()->json([
                        'boton' => null,
                        'status' => 'Faltan datos'
                            ], 400);
        } else {

            $grupo = Grupos::where('codigo', $request->grupo_regalo)->get();
            $regalo = Regalos::where('id', $request->idRegalo)->get();
            $amigo = User::where('id', $request->amigo_a_regalar)->get();

            $tmp = new RegalosParticipantes();
            $tmp->idUserEmisor = Auth::user()->id;

            $tmp->idUserReceptor = $amigo->get(0)->id;
            $tmp->idRegalo = $regalo->get(0)->id;
            $tmp->idGrupo = $grupo->get(0)->id;

            if ($request->mensaje == ''){
                $tmp->mensaje = 'Hay regalo! De quien sera?';
            }else{
                $tmp->mensaje = $request->mensaje;
            }

            $tmp->idPista = 0;

            if ($tmp->save()) {


                $boton_html="<br/><h2 style='margin-bottom: 10px;border: 1px solid grey;justify-content: center;text-align: center;padding: 13px;'>
                Voucher: " . 'CH-' . str_replace(":", "", substr($tmp->created_at, 14, 6)) . '-' . $tmp->id . "</h2>
                <h3 style=' text-align: center;'>Ya casi ... ponete en contacto con el comercio para continuar.</h3>
                <br/>";

                if ($regalo->get(0)->botondepago!=''){
                    $boton_html=$boton_html."<a target='_blank' style='width: 100%;' href='" . $regalo->get(0)->botondepago . "'  class='button small twitch blue-ar-l-rn-none'>Ir a Pagar</a><br/>";
                }
                if ($regalo->get(0)->Empresa->telefono!=''){
                    $boton_html=$boton_html."<a target='_blank' style='width: 100%;background-color: #333333;margin-top: 6px;' href='https://api.whatsapp.com/send?phone=" . $regalo->get(0)->Empresa->telefono . "&text=%20 Hola vendedor! compré un regalo en Cheamigo.com.ar ->  Mi codigo de canje es: " . "CH-" . str_replace(':', '', substr($tmp->created_at, 14, 6)) . "-" . $tmp->id . "' class='button small twitch blue-ar-l-rn-none'>Mensaje al vendedor</a><br/><button type='button class='btn btn-secondary' style='margin-top: 6px;' data-dismiss='modal>Cerrar</button>";
                }

                return response()->json([
                            'boton' => $boton_html,
                            'empresa_tel' => $regalo->get(0)->Empresa->telefono,
                            'empresa_nombre' => $regalo->get(0)->Empresa->nombre,
                            'regalo' => $regalo->get(0)->nombre,
                            'codigoVoucher' => 'CH-' . str_replace(":", "", substr($tmp->created_at, 14, 6)) . '-' . $tmp->id,
                            'status' => true
                                ], 200);
            } else {
                return response()->json([
                            'boton' => 'No pudimos, intentalo nuevamente.',
                            'status' => 'Hubo un error. Intenta de nuevo'
                                ], 400);
            }
        }
    }

}
