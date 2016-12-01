<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professional;
use App\Http\Requests;

class ProfesionalController extends Controller
{
    public function getRegistrar()
    {
    	return view('profesionales.registrarProfesional');
    }

    public function postRegistrar(Request $request)
    {
        $professional = new Professional();

        $professional->nombres = $request->get('nombres');
        $professional->apellidos = $request->get('apellidos');
        $professional->sexo = $request->get('sexo');
        $professional->categoria = $request->get('categoria');
        $professional->colegiado = $request->get('colegiado');
        $professional->estado = $request->get('estado');
        $professional->dni = $request->get('dni');
        $professional->fnacimiento = $request->get('fnacimiento');
        $professional->lnacimiento = $request->get('lnacimiento');
        $professional->lprocedencia = $request->get('lprocedencia');
        $professional->direccion = $request->get('direccion');
        $professional->fijo = $request->get('fijo');
        $professional->movil = $request->get('movil');
        $professional->observacion = $request->get('observacion');

        $professional->save();
        return redirect('/profesionales/registrarProfesional/');


    }
}
