<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Regalos;

class Categorias extends Model
{


    public function getCantidad(){
        return $this->hasMany('App\Regalos', 'categoria', 'id')->where('categoria','=',$this->id)->count();
    }


}
