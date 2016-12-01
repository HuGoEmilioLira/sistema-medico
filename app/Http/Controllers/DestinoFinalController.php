<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DestinoFinalController extends Controller
{
    //
    public function listado ()
    {
    	return view ('destinos.listado');
    }
    public function detalleConsulta ()
    {
    	return view ('destinos.detalle-consulta');
    }
}
