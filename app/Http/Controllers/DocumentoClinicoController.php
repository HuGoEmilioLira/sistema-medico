<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DocumentoClinicoController extends Controller
{
    //
    public function listado ()
    {
    	return view ('documentos.listado');
    }
    public function imagenes ()
    {
    	return view ('documentos.imagenes');
    }
}
