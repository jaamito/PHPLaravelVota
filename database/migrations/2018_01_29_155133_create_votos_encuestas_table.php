<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotosEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votosEncuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idOpciones')->unsigned();
            $table->timestamps();

            //Foreign key.
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idOpciones')->references('id')->on('opcionesEncuestas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votosEncuestas');
    }
}
