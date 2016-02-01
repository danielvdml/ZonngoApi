<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ec_modelo extends Model
{
    protected $table="ec_modelos";
	protected $fillable=array("desc","idMarca","idCategoria");

}
