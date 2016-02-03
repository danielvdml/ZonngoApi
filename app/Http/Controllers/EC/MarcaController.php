<?php

namespace App\Http\Controllers\EC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\EcMarca;

class MarcaController extends Controller
{
    
    public function index()
    {
        return EcMarca::all();
    }

    public function show($id)
    {
        return EcMarca::find($id);
    }


}
