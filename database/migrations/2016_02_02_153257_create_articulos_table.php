<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec_articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('link');
            $table->float('precio');
            $table->string('estado');
            $table->string('imagen');
            $table->date('fecha');
            $table->integer('idModelo')->unsigned();
            $table->foreign('idModelo')->references('id')->on('ec_modelos');
            $table->integer('idOrigen')->unsigned();
            $table->foreign('idOrigen')->references('id')->on('ec_origens');
            $table->integer('idCondicion')->unsigned();
            $table->foreign('idCondicion')->references('id')->on('ec_condicions');
            $table->integer('idMoneda')->unsigned();
            $table->foreign('idMoneda')->references('id')->on('monedas');
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
        Schema::drop('ec_articulos');
    }
}
