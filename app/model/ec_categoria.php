<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ec_categoria extends Model
{
    protected $table="ec_categorias";
    protected $fillable=array("desc");
}
