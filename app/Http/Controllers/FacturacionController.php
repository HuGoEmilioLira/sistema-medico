<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FacturacionController extends Controller
{
    public function facturacion()
    {
        return view ('facturaciones.facturacion');
    }


}
