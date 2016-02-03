<?php

namespace App\Http\Controllers\EC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\EcCategoria;
use App\Model\EcModelo;

class CategoriaModeloController extends Controller
{
    
    public function index($idCategoria)
    {
        return EcCategoria::find($idCategoria)->modelo;
    }

        
    public function show($idCategoria,$idModelo)
    {
        return EcCategoria::find($idCategoria)->modelo()->find($idModelo);
    }

    
}
