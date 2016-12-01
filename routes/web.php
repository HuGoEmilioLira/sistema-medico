<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/pacientes/listado', 'PacienteController@listado');
// Buscar Paciente
Route::get('/pacientes','PacienteController@buscarPacientes');
Route::get('/pacientes/historial', 'PacienteController@historial');
Route::get('/pacientes/datos-generales', 'PacienteController@getDatosGenerales');
Route::post('/pacientes/datos-generales', 'PacienteController@postDatosGenerales');

Route::get('/pacientes/antecedentes-familiares', 'PacienteController@getAntecedentesFamiliares');
// Será utilizado para el Request AJAX
Route::post('/pacientes/antecedentes-familiares', 'PacienteController@postAntecedentesFamiliares');


Route::get('/pacientes/antecedentes-morbidos', 'PacienteController@antecedentesMorbidos');
Route::get('/pacientes/historia-neurologica', 'PacienteController@historiaNeurologica');
Route::get('/pacientes/funciones-biologicas', 'PacienteController@funcionesBiologicas');
Route::get('/pacientes/examen-clinico-general', 'PacienteController@examenClinicoGeneral');
Route::get('/pacientes/examen-regional', 'PacienteController@examenRegional');
Route::get('/pacientes/examen-neurologico', 'PacienteController@examenNeurologico');
Route::get('/pacientes/diagnostico', 'PacienteController@diagnostico');
Route::get('/pacientes/tratamiento', 'PacienteController@tratamiento');

// Exámenes Auxiliares
Route::get('/pacientes/examenes-auxiliares', 'PacienteController@getExamenesAuxiliares');
Route::post('/pacientes/examenes-auxiliares','PacienteController@postExamenesAuxiliares');



Route::get('/pacientes/evlocuion', 'PacienteController@evolucion');

//Route::get('/pacientes/verHistorial', 'PacienteController@verHistorial');
Route::get('/pacientes/verHistorial/{id}', 'PacienteController@verHistorial');




// Ruta para el controlador clínica

Route::get('/clinica/registrar-clinica','ClinicaController@registrarClinica');
Route::post('/clinica/registrar-clinica','ClinicaController@postRegistrarClinica');

Route::get('/clinica/ver-clinica','ClinicaController@verClinica');
Route::get('/clinica/ver-clinica-especifica/{id}','ClinicaController@verClinicaEspecifica');

// Ruta para el controlador usuario

Route::get('/usuarios/registrar-usuario','UsuarioController@registrarUsuario');
Route::get('/usuarios/directorio','UsuarioController@directorio');
Route::get('/usuarios/registrar-acceso','UsuarioController@registrarAcceso');

// Ruta para el controlador consultas

// Route::get('/consultas/registrar-consulta','ConsultasController@registrarConsulta');
Route::get('/consultas/listado','ConsultasController@listado');
Route::get('/consultas/historial-consulta','ConsultasController@historialConsulta');
Route::get('/consultas/detalle-consulta','ConsultasController@detalleConsulta');

// Ruta para los documentos

Route::get('/documentos/listado','DocumentoClinicoController@listado');
Route::get('/documentos/imagenes','DocumentoClinicoController@imagenes');

// Ruta para los destinos finales

Route::get('/destinos/listado','DestinoFinalController@listado');
Route::get('/destinos/detalle-consulta','DestinoFinalController@detalleConsulta');

// Ruta para las Citas
Route::get('/citas/listado','CitaController@listado');
Route::get('/citas/registrarGeneral','CitaController@registrarGeneral');
Route::get('/citas/registrar/{id}','CitaController@registrar');
    // Registrar Cita
Route::post('/citas/registrar','AppointmentController@registrarCitaPaciente');

// Ruta para las Facturas
Route::get('/facturaciones/facturacion','FacturacionController@facturacion');

// Ruta para los profesionales

Route::get('/profesionales/registrarProfesional','ProfesionalController@getRegistrar');
Route::post('/profesionales/registrarProfesional','ProfesionalController@postRegistrar');
