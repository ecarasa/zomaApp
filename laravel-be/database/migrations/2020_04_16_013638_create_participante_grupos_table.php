<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipanteGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante_grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('codigoGrupo',5); // de emi 
            $table->integer('idUsuario'); // de emi 
            $table->integer('idUserAmigoInvible'); // a franco
            $table->integer('idRegalo')->nulleable(); // tal cosa  -> pero de franco a emi puede ser otra 
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
        Schema::dropIfExists('participante_grupos');
    }
}
