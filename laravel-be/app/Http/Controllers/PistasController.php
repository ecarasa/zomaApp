<?php

namespace App\Http\Controllers;


use App\Pistas;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use GuzzleHttp\Exception\RequestException;
Use \Carbon\Carbon;


class PistasController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function responder(request $request)
    {

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "AC3e1ec249aef4408bab3c26fdc49fc497";
$token  = "29f593f9c1d301f1fb5ee98e260b7a68";
$twilio = new Client($sid, $token);
/*
$message = $twilio->messages 
                  ->create("whatsapp:$request->From", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "dijiste $request->Body"  
                           ) 
                  ); 

                  print($message->sid);
                  */

}


    public function enviarw()
    {

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "AC3e1ec249aef4408bab3c26fdc49fc497";
$token  = "8ebc61e969130d9c0ad8bf842b7b16d6";
$twilio = new Client($sid, $token);

$message = $twilio->messages 
                  ->create("whatsapp:+5491159389952", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "Hola Zoma! te mando un numero random desde php: ". rand() 
                           ) 
                  ); 

                  print($message->sid);


}

    public function mensaje( request $request )
    {
      
    
        $mensajes = DB::table('pistas')->where('pistas.id','like',$request->idpista )
        ->join('users', 'pistas.idUserEmisor', '=', 'users.id')
        ->join('users as u2', 'pistas.idUserReceptor', '=', 'u2.id') 
        ->join('grupos as g', 'pistas.idGrupo', '=', 'g.id')
        ->select('pistas.*', 'users.email as emisor' ,'u2.email as receptor','g.nombre as grupo' )
        ->get();
        return view('grid_pista_detalle')->with(compact('mensajes'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request )
    { 
        //$mensajes = Pistas::all();
        $userLogueado=0;
        if (Auth::id()>0)
            $userLogueado=Auth::id();
       
        
        $mensajes = DB::table('pistas')->where('idUserEmisor','like',$userLogueado)
                    ->join('users', 'pistas.idUserEmisor', '=', 'users.id')
                    ->join('users as u2', 'pistas.idUserReceptor', '=', 'u2.id') 
                    ->join('grupos as g', 'pistas.idGrupo', '=', 'g.id')
                    ->select('pistas.*', 'users.email' ,'u2.email as receptor','g.nombre as GrupoNombre' )
                    ->orderby('pistas.fecha' ,'desc')
                    ->get();

        $grupos =  DB::table('participante_grupos as pg')->where('idUsuario','like',$userLogueado)
                    ->join('users', 'pg.idUserAmigoInvible', '=', 'users.id')
                    ->join('grupos as g', 'g.codigo', '=', 'pg.codigoGrupo')
                    ->select('g.id','g.nombre as codigoGrupo','pg.idUserAmigoInvible','users.email'  )                    
                    ->get();

        $users = DB::table('users')->where('id','like',$userLogueado)->select('name as nombre','email')->get();
        
        $regalos= DB::table('regalos as r')->select('r.*')->get();

        return view('pista')->with(compact('mensajes','userLogueado','grupos','users','regalos'));
    }


    public function recibidos(request $request )
    { 
                $mensajes = DB::table('pistas')->where('idUserReceptor','like',$request->idUser)
                    ->join('users', 'pistas.idUserReceptor', '=', 'users.id')
                   // ->join('users as u2', 'pistas.idUserReceptor', '=', 'u2.id') 
                    ->join('grupos as g', 'pistas.idGrupo', '=', 'g.id')
                    ->select('pistas.*','g.nombre as GrupoNombre' )
                    ->get();

        $userLogueado=$request->idUser;
        $grupos =  DB::table('participante_grupos as pg')->where('idUsuario','like',$userLogueado)
                    ->join('users', 'pg.idUserAmigoInvible', '=', 'users.id')
                    ->join('grupos as g', 'g.codigo', '=', 'pg.codigoGrupo')
                    ->select('g.id','g.nombre as codigoGrupo','pg.idUserAmigoInvible','users.email'  )                    
                    ->get();

        //$users = DB::table('users')->where('id','like',$userLogueado)->select('name as nombre','email')->get();
        $regalos= DB::table('regalos as r')->select('r.*')->get();
        return view('grid_recibidos')->with(compact('mensajes','userLogueado','grupos','regalos'));
       // return view('grid_pista_centro');
    }
    public function mensajeregalo(request $request )
    { 
        $regalos= DB::table('regalos as r')->where('id','like',$request->idregalo)
        ->select('r.*')->get();
        return view('grid_mensajeregalo')->with(compact('regalos'));
      
    }

    public function enviados(request $request )
    { 
                $mensajes = DB::table('pistas')->where('idUserEmisor','like',$request->idUser)
                    ->join('users', 'pistas.idUserEmisor', '=', 'users.id')
                    ->join('users as u2', 'pistas.idUserReceptor', '=', 'u2.id') 
                    ->join('grupos as g', 'pistas.idGrupo', '=', 'g.id')
                    ->select('pistas.*', 'users.email' ,'u2.email as receptor','g.nombre as GrupoNombre' )
                    ->orderby('pistas.fecha' ,'desc')
                    ->get();

        $userLogueado=$request->idUser;
        $grupos =  DB::table('participante_grupos as pg')->where('idUsuario','like',$userLogueado)
                    ->join('users', 'pg.idUserAmigoInvible', '=', 'users.id')
                    ->join('grupos as g', 'g.codigo', '=', 'pg.codigoGrupo')
                    ->select('g.id','g.nombre as codigoGrupo','pg.idUserAmigoInvible','users.email'  )                    
                    ->get();

        $users = DB::table('users')->where('id','like',$userLogueado)->select('name as nombre','email')->get();
        $regalos= DB::table('regalos as r')->select('r.*')->get();
        return view('grid_pista_centro')->with(compact('mensajes','userLogueado','grupos','users','regalos'));
       // return view('grid_pista_centro');
    }


    public function grupos(request $request )
    { 
                $mensajes = DB::table('pistas')->where('idUserReceptor','like',$request->idUser)
                    ->join('users', 'pistas.idUserReceptor', '=', 'users.id')
                   // ->join('users as u2', 'pistas.idUserReceptor', '=', 'u2.id') 
                    ->join('grupos as g', 'pistas.idGrupo', '=', 'g.id')
                    ->select('pistas.*','g.nombre as GrupoNombre' )
                    ->get();

        $userLogueado=$request->idUser;
        $grupos =  DB::table('participante_grupos as pg')->where('idUsuario','like',$userLogueado)
                    ->join('users', 'pg.idUserAmigoInvible', '=', 'users.id')
                    ->join('grupos as g', 'g.codigo', '=', 'pg.codigoGrupo')
                    ->select('g.id','g.nombre as codigoGrupo','pg.idUserAmigoInvible','users.email','g.fechaFin'  )                    
                    ->get();

        //$users = DB::table('users')->where('id','like',$userLogueado)->select('name as nombre','email')->get();

        return view('grid_grupos_pista')->with(compact('mensajes','userLogueado','grupos'));
       // return view('grid_pista_centro');
    }

    public function grupodetalle(request $request )
    { 
            
        $idgrupo=$request->idgrupo;
        $grupos =  DB::table('participante_grupos as pg')->where('g.id','like',$idgrupo)
                    ->join('users as u', 'pg.idUsuario', '=', 'u.id')
                    ->join('grupos as g', 'g.codigo', '=', 'pg.codigoGrupo')
                    ->select('g.id'
                            ,'g.nombre as NombreGrupo',
                            'pg.idUserAmigoInvible',
                            'u.email as usuario',
                            'u.name as usuarioN',
                            'g.fechaFin',
                            DB::raw( '(CASE WHEN u.id = g.idUsuarioAdmin THEN \'Admin\' ELSE \'Participante\' END) AS rol')
                    )
                    ->get();
        $gruposdato =  DB::table('grupos')->where('grupos.id','like',$idgrupo)
                    
                    ->select('grupos.*')
                    ->get();

        //$users = DB::table('users')->where('id','like',$userLogueado)->select('name as nombre','email')->get();

        return view('pista_grupodetalle')->with(compact('grupos','gruposdato'));
       // return view('grid_pista_centro');
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
        if (!$request->has(['emisor', 'receptor', 'pistamsj', 'grupo'])) {
            $output = array("status"=>false, "msj"=>"Faltan datos");
            return response()->json($output);
        }
        $pista =  new Pistas(); 
        $pista->idUserEmisor=$request->emisor;
        $pista->idUserReceptor=$request->receptor;
        $pista->mensaje=$request->pistamsj;
        $pista->fecha=Carbon::now();
        $pista->idgrupo=$request->grupo;
        $pista->idregalo=$request->regalo;
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
