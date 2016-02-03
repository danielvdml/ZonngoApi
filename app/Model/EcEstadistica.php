<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcEstadistica extends Model
{
    protected $table = 'ec_estadisticas';

    protected $fillable = array('fecha', 'cantArtNuevos', 'cantArtDisp',
        'avg', 'min', 'max', 'ds', 'idModelo');

    public $timestamps = false;
}
