<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcCategoria extends Model
{
    protected $table = 'ec_categorias';

    protected $fillable = array('desc');

    public $timestamps = false;

    public function modelos()
    {
        return $this->hasMany("App\Model\EcModelo", 'idCategoria');
    }
}
