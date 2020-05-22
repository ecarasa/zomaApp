<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //agrego forzar cambio de clave
            $table->integer('forzarcambioclave',0) ->nullable ->default(0);;
        });
            /* sorry for this */ 
        Schema::table('grupos', function (Blueprint $table) {
            //agrego forzar cambio de clave
            $table->integer('iniciado',0) ->nullable->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
