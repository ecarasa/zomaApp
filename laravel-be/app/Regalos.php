<?php

namespace App;
use App\Categorias;
use App\Empresas;
use Illuminate\Database\Eloquent\Model;

class Regalos extends Model
{



    public function Categoria(){
        return $this->hasOne('App\Categorias', 'id', 'categoria');
    }

    public function Empresa(){
        return $this->hasOne('App\Empresas', 'id', 'empresa');
    }

}
