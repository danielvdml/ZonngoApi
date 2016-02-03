<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoCambiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_cambios', function (Blueprint $table) {
            $table->integer('idMoneda1')->unsigned();
            $table->foreign('idMoneda1')->references('id')->on('monedas');
            $table->integer('idMoneda2')->unsigned();
            $table->foreign('idMoneda2')->references('id')->on('monedas');
            $table->float('equiv');
            #$table->timestamps();
            $table->primary(array('idMoneda1', 'idMoneda2'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_cambios');
    }
}
