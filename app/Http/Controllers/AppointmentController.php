<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Appointment;

use App\Http\Requests;

class AppointmentController extends Controller
{
    public function registrarCitaPaciente (Request $request)
    {
        // Un request trae la data del formulario
        $cita = new Appointment();

        $cita->patient_id = $request->get('patient_id');
        $cita->professional_id = $request->get('professional_id');

        $cita->asunto = $request->get('asunto');
        $cita->fecha = $request->get('fecha');
        $cita->hora = $request->get('hora');
        $cita->duracion = $request->get('duracion');
        $cita->recomendacion = $request->get('recomendacion');

        $cita->save();
        return redirect('pacientes/listado');

    }

    public function __construct()
    {
        Carbon::setLocale('es');
    }
}
