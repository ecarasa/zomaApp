<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegalosParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regalos_participantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idUserEmisor');
            $table->integer('idUserReceptor');
            $table->integer('idRegalo');
            $table->integer('idGrupo');
            $table->longText('idPista')->nulleable();
            $table->longText('mensaje')->nulleable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regalos_participantes');
    }
}
