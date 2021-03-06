<?php

namespace App;
use ParticipanteGrupos;
use User;
use DB;

use Auth;
use Illuminate\Database\Eloquent\Model;


class Grupos extends Model
{
    
    public function getParticipantes(){
        //return $this->hasOne('App\ParticipanteGrupos', 'idUsuario', 'id');
        return $this->hasManyThrough(
            'App\User',
            'App\ParticipanteGrupos',
            'codigoGrupo',
            'id',
            'codigo',
            'idUsuario'
        );
    }

    /* valido si todos tienen amigos */
    public function checkgrupoAmigos($idgrupo) {
        $amigos =   DB::table(DB::RAW('participante_grupos AS G,grupos AS gr')) 
                    -> whereraw('gr.id='.$idgrupo.' and idUserAmigoInvible=0 and gr.codigo=G.codigoGrupo')
                   
                    ->select(DB::RAW('count(*) as cant'))->get();
                    foreach($amigos as $amigo){
                        //dd($usuario);
                       return $amigo->cant;
                    }

    }

    /* valido si existe el usuario */
    public function existeEmail ($email) {

        $usuarios = DB::table('users')
        
        ->select(DB::RAW('max(users.id) as id'))
        ->whereraw( "lower(email)= '$email'")
        ->get();
        foreach($usuarios as $usuario){
            //dd($usuario);
           return $usuario->id;
        }
        

    }

    
   

    public function soyIntegranteAdmin($userID,$codgrupo){
        //return $this->hasOne('App\ParticipanteGrupos', 'idUsuario', 'id');

        $usuarios = DB::table('grupos')
        ->where( 'grupos.codigo', '=', $codgrupo)
        ->join('users', 'users.id', '=', 'grupos.idUsuarioAdmin')
        ->where( 'users.id', '=', $userID)
        ->select('users.id')
        ->get();

        foreach($usuarios as $usuario){
            //dd($usuario);
            if ($usuario->id == $userID){
                return true;
            }
        }

        return false;
    }
    public function soyIntegrante($userID,$codigogrupo){
        //return $this->hasOne('App\ParticipanteGrupos', 'idUsuario', 'id');

        $usuarios = DB::table('grupos')->where('codigogrupo','=',$codigogrupo)
        ->join('participante_grupos', 'grupos.codigo', '=', 'participante_grupos.codigoGrupo')
        ->join('users', 'users.id', '=', 'participante_grupos.idUsuario')
        ->select('users.id')
        ->get();

        foreach($usuarios as $usuario){
            //dd($usuario);
            if ($usuario->id == $userID){
                return true;
            }
        }

        return false;
    }


}
