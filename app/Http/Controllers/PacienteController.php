<?php

namespace App\Http\Controllers;

use App\FamilyHistory;
use App\AuxiliaryExams;
use App\Patient;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;
use Illuminate\Queue\RedisQueue;

class PacienteController extends Controller
{
    //
    public function buscarPacientes(Request $request)
    {
        $query = $request->get('query');
        return Patient :: where('nombres','like', '%'.$query.'%')
            ->orWhere('apellidos','like', '%'.$query.'%')
            ->get();

    }
    public function historial()
    {
        return view('pacientes.historial');
    }
    public function getDatosGenerales()
    {
        return view('pacientes.datos-generales');
    }
    public function postDatosGenerales(Request $request)
    {
        $patient = new Patient();
        //Creamos un objeto paciente
        $patient->nombres = $request->get('nombres');
        $patient->apellidos = $request->get('apellidos');
        $patient->sexo = $request->get('sexo');
        $patient->ocupacion = $request->get('ocupacion');
        $patient->estado_civil = $request->get('estado_civil');
        $patient->dni = $request->get('dni');
        $patient->fnacimiento = $request->get('fnacimiento');
        $patient->lnacimiento = $request->get('lnacimiento');
        $patient->lprocedencia = $request->get('lprocedencia');
        $patient->direccion = $request->get('direccion');
        $patient->fijo = $request->get('fijo');
        $patient->movil = $request->get('movil');

        $patient->save();
        return redirect('/pacientes/verHistorial/'.$patient->id);
        //dd($request->all());
        //imprimieá todos los datos del request
        //el objeto request almacenará todos datos del formulario
       // return view('pacientes.datos-generales');
    }

    // Antecedentes Familiares
    public function getAntecedentesFamiliares()
    {
        return view('pacientes.antecedentes-familiares');
    }
    public function postAntecedentesFamiliares(Request $request)
    {
        $familyHistory = new FamilyHistory();
        //Creamos un objeto paciente
        $familyHistory->patient_id = $request->get('patient_id');
        $familyHistory->description = $request->get('description');
        $familyHistory->save();
        return $familyHistory;
        //Comenzamos con AJAX -> return de un Objeto en formato JSon
    }

    // Constructor para las todas las fechas
    public function __construct()
    {
        Carbon::setLocale('es');
    }


    public function antecedentesMorbidos()
    {
        return view('pacientes.antecedentes-morbidos');
    }
    public function historiaNeurologica()
    {
        return view('pacientes.historia-neurologica');
    }
    public function funcionesBiologicas()
    {
        return view('pacientes.funciones-biologicas');
    }
    public function examenClinicoGeneral()
    {
        return view('pacientes.examen-clinico-general');
    }
    public function examenRegional()
    {
        return view('pacientes.examen-regional');
    }
    public function examenNeurologico()
    {
        return view('pacientes.examen-neurologico');
    }
    public function diagnostico()
    {
        return view('pacientes.diagnostico');
    }
    public function tratamiento()
    {
        return view('pacientes.tratamiento');
    }

    // Exámenes Auxiliares
    public function getExamenesAuxiliares()
    {
        return view('pacientes.examenes-auxiliares');
    }
    public function postExamenesAuxiliares(Request $request)
    {
        $auxiliaryExam = new AuxiliaryExams();
        $auxiliaryExam->patient_id = $request->get('patient_id');
        $auxiliaryExam->description = $request->get('description');
        $auxiliaryExam->save();
        return $auxiliaryExam;
    }


    public function evolucion()
    {
        return view('pacientes.evolucion');
    }

    public function listado()
    {
        //Eloquent de laravel, para hacer consultas
        $patients = Patient::all();
        return view('pacientes.listado')->with(compact('patients'));
    }

    // Método para inyectar las variables a la vista del Historia o perfil
     public function verHistorial($id)
    {
        $patient = Patient::find($id);
        $familyHistories = FamilyHistory::where('patient_id',$id)->get();
        $auxiliaryExams = AuxiliaryExams::where('patient_id',$id)->get();
        return view('pacientes.verHistorial')->with(compact('patient','familyHistories','auxiliaryExams'));

    }
}



