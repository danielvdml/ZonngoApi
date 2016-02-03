<?php

namespace App\Http\Controllers\EC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\EcModelo;

class ModeloEstadisticaController extends Controller
{
    
    public function index($idModelo)
    {
        return EcModelo::find($idModelo)->estadistica;
    }

    public function show($idModelo,$idEstadistica)
    {
        return EcModelo::find($idModelo)->estadistica()->find($idEstadistica);
    }

    public function rangeShow($idModelo,$fechaInicio,$fechaFin)
    {
        
    }


}
