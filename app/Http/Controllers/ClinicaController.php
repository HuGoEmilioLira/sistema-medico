<?php

namespace App\Http\Controllers;

use App\Clinic;
use Illuminate\Http\Request;

use App\Http\Requests;

class ClinicaController extends Controller
{
    //
    public function registrarClinica()
    {
        return view('clinica.registrar-clinica');
    }
    public function verClinica()
    {
        $clinics = Clinic ::all();
        return view('clinica.ver-clinica')->with(compact('clinics'));
    }
    public function verClinicaEspecifica($id)
    {
        $clinic = Clinic::find($id);
        return view('clinica.ver-clinica-especifica')->with(compact('clinic'));
    }
    public function postRegistrarClinica(Request $request)
    {
        $clinic = new Clinic();

        $clinic->nombre = $request->get('nombre');
        $clinic->razon = $request->get('razon');
        $clinic->domicilio = $request->get('domicilio');
        $clinic->ruc = $request->get('ruc');
        $clinic->contribuyente = $request->get('contribuyente');
        $clinic->giro = $request->get('giro');
        $clinic->distrito = $request->get('distrito');
        $clinic->provincia = $request->get('provincia');
        $clinic->departamento = $request->get('departamento');
        $clinic->pais = $request->get('pais');
        $clinic->fijo = $request->get('fijo');
        $clinic->correo = $request->get('correo');
        $clinic->web = $request->get('web');
        $clinic->observacion = $request->get('observacion');

        $clinic->save();
        return redirect('/clinica/registrar-clinica/');


    }
}
