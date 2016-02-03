<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcCaracteristica extends Model
{
    protected $table = 'ec_caracteristicas';

    protected $fillable = array('desc');

    public $timestamps = false;

    public function modelo()
    {
        return $this->belongsToMany("App\Model\EcModelo", 'CaracteristicaModelo', 'idCaracteristica', 'idModelo')->withPivot('valor');
    }
}
