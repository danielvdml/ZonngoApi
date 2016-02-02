<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class EcModelo extends Model
{
    protected $table="ec_modelos";
	protected $fillable=array("desc","idMarca","idCategoria");
	protected $timestamps=false;
}
