<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    //
    public function registrarUsuario()
    {
    	return view('usuarios.registrar-usuario');
    }
    public function directorio()
    {
    	return view('usuarios.directorio');
    }
    public function registrarAcceso()
    {
    	return view('usuarios.registrar-acceso');
    }

}
