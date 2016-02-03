<?php

namespace App\Http\Controllers\EC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\EcModelo;
class ModeloArticuloController extends Controller
{
    
    public function index($idModelo)
    {
        return EcModelo::find($idModelo)->articulo;
    }

    
    public function show($idModelo,$idArticulo)
    {
        return EcModelo::find($idModelo)->articulo()->find($idArticulo);
    }

    
}
