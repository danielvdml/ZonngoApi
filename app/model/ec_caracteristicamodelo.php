<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ec_caracteristicamodelo extends Model
{
    protected $table="ec_caracteristicamodelos";
    protected $fillable=array("valor","idModelo","idCaracteristica");
}
