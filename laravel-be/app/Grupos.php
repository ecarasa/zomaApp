<?php

namespace App;
use ParticipanteGrupos;
use User;
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


}
