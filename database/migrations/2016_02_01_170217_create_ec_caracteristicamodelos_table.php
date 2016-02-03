<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcCaracteristicamodelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec_caracteristicamodelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("valor");
            $table->integer("idModelo")->unsigned();
            $table->integer("idCaracteristica")->unsigned();
            $table->foreign("idModelo")->references("id")->on("ec_modelos");
            $table->foreign("idCaracteristica")->references("id")->on("ec_caracteristicas");
            #$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ec_caracteristicamodelos');
    }
}
