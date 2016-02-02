<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class EcCaracteristicaModelo extends Model
{
    protected $table="ec_caracteristicamodelos";
    protected $fillable=array("valor","idModelo","idCaracteristica");
    protected $timestamps=false;
}
