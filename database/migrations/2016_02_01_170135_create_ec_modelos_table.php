<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ec_modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desc');
            $table->integer("idMarca")->unsigned();
            $table->integer("idCategoria")->unsigned();
            $table->foreign("idMarca")->references("id")->on("ec_marcas");
            $table->foreign("idCategoria")->references("id")->on("ec_categorias");
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
        Schema::drop('ec_modelos');
    }
}
