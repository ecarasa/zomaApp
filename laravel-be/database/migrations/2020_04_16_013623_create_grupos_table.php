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
            
            //obligatorios
            $table->bigInteger('idUsuarioAdmin');
            $table->string('nombre');
            $table->float('maxDinero', 8, 2);
            $table->integer('estado');
            
            //nulleables
            $table->longText('msjBienvenida')->nullable();
            $table->string('imagen')->nullable();
            $table->integer('maxJugadores')->nullable();
            $table->boolean('permiteAdivinar')->nullable();
            $table->dateTime('fechaInicio')->nullable();
            $table->dateTime('fechaFin')->nullable();
            $table->char('codigo', 5)->unique();
            $table->timestamps();
            /*

            Schema::table('posts', function (Blueprint $table) {
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
            });

            Schema::table('posts', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained();
            });

            */

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
