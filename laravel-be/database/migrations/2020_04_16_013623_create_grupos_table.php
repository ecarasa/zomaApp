<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigIncrements('idUsuarioAdmin');
            $table->string('nombre');
            
            $table->string('msjBienvenida')->nulleable;
            $table->string('imagen');

            $table->float('maxDinero');
            $table->integer('maxJugadores');
            $table->boolean('permiteAdivinar');
            
            $table->timestamps('fechaInicio');
            $table->datetime('fechaFin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
