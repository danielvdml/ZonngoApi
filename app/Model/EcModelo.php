<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcModelo extends Model
{
    protected $table = 'ec_modelos';

    protected $fillable = array('desc', 'idMarca', 'idCategoria');

    public $timestamps = false;

    public function caracteristicas()
    {
        return $this->belongsToMany("App\Model\EcCaracteristica", 'CaracteristicaModelo', 'idModelo', 'idCaracteristica')->withPivot('valor');
    }

    public function estadisticas()
    {
        return $this->hasMany("App\Model\EcEstadistica", 'idModelo');
    }
}
