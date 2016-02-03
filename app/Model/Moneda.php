<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    //
    protected $table = 'monedas';

    protected $fillable = array('desc');

    public $timestamps = false;
    //protected $hidden = ['created_at', 'updated_at'];

    public function tipoCambio()
    {
        return $this->hasMany('App\Model\TipoCambio', 'idMoneda1');
    }
}
