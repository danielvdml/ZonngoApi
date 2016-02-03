<?php

namespace App\Http\Controllers\EC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\EcArticulo;

class ArticuloController extends Controller
{
    
    public function index()
    {
        return EcArticulo::all();
    }

    
    public function show($id)
    {
        return ECArticulo::find($id);
    }

    
}
