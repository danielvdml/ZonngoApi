<?php

namespace App\Http\Controllers\EC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\EcCategoria;

class CategoriaController extends Controller
{
    
    public function index()
    {
        return EcCategoria::all();
    }

    
    public function show($id)
    {
        return EcCategoria::find($id);
    }

    
}
