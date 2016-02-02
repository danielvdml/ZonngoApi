<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class EcCategoria extends Model
{
    protected $table="ec_categorias";
    protected $fillable=array("desc");
    protected $timestamps=false;
    
}
