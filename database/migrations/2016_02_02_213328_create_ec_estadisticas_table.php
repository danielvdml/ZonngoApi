<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcEstadisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec_estadisticas', function (Blueprint $table) {
            $table->increments('id');
            $table->date("update");
            $table->integer("cantArtNuevos");
            $table->integer("cantArtDisp");
            $table->float("avg");
            $table->float("min");
            $table->float("max");
            $table->float("ds");
            $table->integer("idModelo")->unsigned();
            $table->foreign("idModelo")->references("id")->on("ec_modelos");
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
        Schema::drop('ec_estadisticas');
    }
}
