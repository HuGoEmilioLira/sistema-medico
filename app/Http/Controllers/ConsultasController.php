<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConsultasController extends Controller
{
    //dentro del constructor se crean los metodos que seran usados para devolver las vistas
	// el consultas.registrar-consulta hace referencia a que devolvera la vista registrar-consulta
	// dentro de la carpeta consultas (esta carpeta de crearse de manera manual).
    // public function registrarConsulta ()
    // {
    // 	return view ('consultas.registrar-consulta');
    // }
    public function listado ()
    {
    	return view ('consultas.listado');
    }
    public function historialConsulta ()
    {
        return view ('consultas.historial-consulta');
    }
    public function detalleConsulta ()
    {
        return view ('consultas.detalle-consulta');
    }
}



