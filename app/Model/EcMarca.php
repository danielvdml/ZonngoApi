<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcMarca extends Model
{
    protected $table = 'ec_marcas';

    protected $fillable = array('desc');

    public $timestamps = false;

    public function modelo()
    {
        return $this->hasMany("App\Model\EcModelo", 'idMarca');
    }
}
