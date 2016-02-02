<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class EcCaracteristica extends Model
{
    protected $table="ec_caracteristicas";
    protected $fillable=array("desc");
    protected $timestamps=false;
}
