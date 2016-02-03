<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcModelo extends Model
{
    protected $table = 'ec_modelos';

    protected $fillable = array('desc', 'idMarca', 'idCategoria');

    public $timestamps = false;

    public function caracteristica()
    {
        return $this->belongsToMany("App\Model\EcCaracteristica", 'CaracteristicaModelo', 'idModelo', 'idCaracteristica')->withPivot('valor');
    }

    public function estadistica()
    {
        return $this->hasMany("App\Model\EcEstadistica", 'idModelo');
    }

    public function articulo()
    {
        return $this->hasMany("App\Model\EcArticulo","idModelo");
    }
}
