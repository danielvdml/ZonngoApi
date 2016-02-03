<?php

namespace App\Http\Controllers\EC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\EcModelo;

class ModeloController extends Controller
{
   
    public function index()
    {
        return EcModelo::all();
    }

   
    public function show($id)
    {
        return EcModelo::find("$id");
    }

}
