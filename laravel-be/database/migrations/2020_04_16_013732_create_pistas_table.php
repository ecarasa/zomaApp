<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pistas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('idUserEmisor'); // de emi 
            $table->integer('idUserReceptor'); // para franco
            $table->string('mensaje'); // mensaje de la pista
            $table->timestamp('fecha')->nullable(); // fecha de envio
            $table->integer('idRegalo')->nullable(); // opcional regalo
            


        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pistas');
    }
}
