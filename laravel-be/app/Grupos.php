<?php

namespace App;
use ParticipanteGrupos;
use User;
use DB;
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


    public function soyIntegrante($userID){
        //return $this->hasOne('App\ParticipanteGrupos', 'idUsuario', 'id');

        $usuarios = DB::table('grupos')
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
