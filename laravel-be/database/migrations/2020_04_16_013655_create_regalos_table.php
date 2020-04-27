<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegalosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regalos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->float('importe');
            $table->float('importe_promo')->nullable();
            $table->datetime('importe_promo_fecha_fin')->nullable();
            $table->string('url')->nullable();
            $table->string('botondepago');
            $table->integer('categoria');
            $table->integer('empresa');
            $table->json('datos_varios_1')->nullable();
            $table->json('datos_varios_2')->nullable();
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
        Schema::dropIfExists('regalos');
    }
}
