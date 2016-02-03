<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcCaracteristicaModelo extends Model
{
    protected $table = 'ec_caracteristicamodelos';

    protected $fillable = array('valor', 'idModelo', 'idCaracteristica');

    public $timestamps = false;
}
