<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesoEncuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idEncuestas')->unsigned();
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idEncuestas')->references('id')->on('encuestas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesoEncuestas');
    }
}
