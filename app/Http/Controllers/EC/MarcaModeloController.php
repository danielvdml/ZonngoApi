<?php

namespace App\Http\Controllers\EC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\EcMarca;
use App\Model\EcModelo;

class MarcaModeloController extends Controller
{
    
    public function index($idMarca)
    {
        return EcMarca::find($idMarca)->modelo;
    }

    
    public function show($idMarca,$idModelo)
    {
        return EcMarca::find($idMarca)->modelo()->find($idModelo);
    }
  
}
