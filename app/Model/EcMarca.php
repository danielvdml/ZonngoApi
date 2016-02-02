<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class EcMarca extends Model
{
    protected $table="ec_marcas";
    protected $fillable=array("desc");
    protected $timestamps=false;

}
