<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCambio extends Model
{
    //
    protected $table = 'tipo_cambios';

    protected $primaryKey = ['idMoneda1', 'idMoneda2'];

    protected $fillable = ['idMoneda1', 'idMoneda2', 'equiv'];

    protected $timestamps = false;
    //protected $hidden = ['created_at', 'updated_at'];

    public function moneda1()
    {
        return $this->belongsTo('App\Model\Moneda', 'idMoneda1');
    }

    public function monead2()
    {
        return $this->belongsTo('App\Model\Moneda', 'idMoneda2');
    }
}
