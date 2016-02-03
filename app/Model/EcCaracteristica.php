<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class EcCaracteristica extends Model
{
    protected $table="ec_caracteristicas";
    protected $fillable=array("desc");
    protected $timestamps=false;
    public function modelos(){
		return $this->belongsToMany("App\Model\EcModelo","CaracteristicaModelo","idCaracteristica","idModelo")->withPivot("valor");
	}
}
