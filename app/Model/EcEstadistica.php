<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcEstadistica extends Model
{
    protected $table="EcEstadistica";
    protected $fillable=array("fecha","cantArtNuevos","cantArtDisp","avg","min","max","ds","idModelo");
    protected $timestamps=false;

}
