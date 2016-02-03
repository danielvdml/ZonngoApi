<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcArticulo extends Model
{
    //
    protected $table = 'ec_articulos';

    protected $fillable = array('titulo', 'link', 'precio', 'estado', 'imagen',
      'fecha', 'idModelo', 'idOrigen', 'idCondicion', 'idMoneda', );

    public $timestamps = false;
    //protected $hidden = ['created_at', 'updated_at'];

    public function modelo()
    {
        return $this->belongsTo('App\Model\EcModelo');
    }

    public function moneda()
    {
        return $this->belongsTo('App\Model\Moneda');
    }

    public function condicion()
    {
        return $this->belongsTo('App\Model\EcCondicion');
    }

    public function origen()
    {
        return $this->belongsTo('App\Model\EcOrigen');
    }
}
