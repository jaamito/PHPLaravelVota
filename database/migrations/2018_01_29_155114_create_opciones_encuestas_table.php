<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionesEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcionesEncuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idEncuesta')->unsigned();
            $table->string('respuesta');
            $table->integer('votos');
            $table->timestamps();
            //Foreign key con id encuestas.
            $table->foreign('idEncuesta')->references('id')->on('encuestas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opcionesEncuestas');
    }
}
