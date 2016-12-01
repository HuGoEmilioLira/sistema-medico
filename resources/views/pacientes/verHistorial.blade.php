@extends('layouts.starter')

@section('title', 'Inicio')

@section('description', 'Panel De Bienvenida')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Historial Clínico </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <ol class="breadcrumb">
                <p class="bg-primary">PACIENTE: {{$patient->nombres}} {{$patient->apellidos}}</p>
                <p class="bg-info">DIRECCIÓN: Urb. {{$patient->direccion}}</p>
                <p class="bg-info">TELEFONÍA FIJA: {{$patient->fijo}}</p>
                <p class="bg-info">TELEFONÍA MÓVIL: {{$patient->movil}}</p>

                <!-- <li class="active">Here</li> -->
            </ol>
            {{--ul=lista , li=item , a=enlace--}}

            <ul class="nav nav-tabs nav-justified ">
                <li role="presentation" class="active"><a href="datos_generales">Datos Generales</a></li>
                <li role="presentation"><a href="antecedentes_familiares">Antecedentes Familiares</a></li>
                <li role="presentation"><a href="antecedentes_morbidos">Antecedentes Patógenos</a></li>
                <li role="presentation"><a href="historia_neurologica">Historia Neurológica</a></li>
                <li role="presentation"><a href="funciones_biologicas">Funciones Biológicas</a></li>
                <li role="presentation"><a href="examen_clinico">Exámen Clínico </a></li>

            </ul>
            <ul class="nav nav-tabs nav-justified ">

                <li role="presentation"><a href="examen_regional">Exámen Regional</a></li>
                <li role="presentation"><a href="examen_neurologico">Exámen Neurológico</a></li>
                <li role="presentation"><a href="diagnostico">Diagnósticos</a></li>
                <li role="presentation"><a href="tratamiento">Tratamiento</a></li>
                <li role="presentation"><a href="examenes_auxiliares">Exámenes Auxiliares</a></li>
                <li role="presentation"><a href="evolucion">Evolución</a></li>
            </ul>

            @include('pacientes.historial.datos_generales')

            @include('pacientes.historial.antecedentes_familiares')

            @include('pacientes.historial.antecedentes_morbidos')

            @include('pacientes.historial.historia_neurologica')

            @include('pacientes.historial.funciones_biologicas')

            @include('pacientes.historial.examen_clinico_general')

            @include('pacientes.historial.examen_regional')

            @include('pacientes.historial.examen_neurologico')

            @include('pacientes.historial.diagnostico')

            @include('pacientes.historial.tratamiento')

            @include('pacientes.historial.examenes_auxiliares')

            @include('pacientes.historial.evolucion')



        </div>


      </div>
@endsection

@section('scripts')
    <script>
        //$(document).on('ready', function () {});
        // selector $() de html
        $(function () {
            //capturamoe el evento en la etiqueta a, eventoEnlace va ser la función
            $('ul.nav-tabs a').on('click', eventoEnlace);

            function eventoEnlace() {
                //evento para que no haga redirección
                event.preventDefault();

                var id = $(this).attr('href');
                //alert(id);
                $('ul.nav-tabs li').removeClass('active');
                $(this).parent().addClass('active');
                $('section.tab-section').hide();
                $('#'+id).show();
            }
        });
    </script>
    <script src="{{ asset('/js/antecedentesFamiliares.js') }}"></script>
    <script src="{{ asset('/js/examenesAuxiliares.js') }}"></script>
@endsection
