<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Professional;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Patient;

class CitaController extends Controller
{
    // Solo para mostrar el listado de citas
    public function listado ()
    {
        $profesionales = Professional::all();
        $appointments = Appointment::all();
        return view ('citas.listado')->with(compact('appointments','profesionales'));
    }
    // Solo para regitrar desde el starter
    public function registrarGeneral ()
    {
        return view ('citas.registrarGeneral');
    }
    // $id recibe el id de la ruta, para mandarlo a la vista
    public function registrar ($id)
    {
        $paciente = Patient::find($id);
        $profesionales = Professional::all(); // Colección
        return view ('citas.registrar')->with(compact('paciente','profesionales'));
    }
}
