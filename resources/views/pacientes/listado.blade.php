@extends('layouts.starter')

@section('title', 'Inicio')

@section('description', 'Panel De Bienvenida')

@section('content')
<div class="box box-default">



        <div class="box-header with-border">
          <h3 class="box-title text-center">Listado De Pacientes</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form-horizontal" id="buscarPaciente" >
                {{ csrf_field() }}
                <div class="form-group col-md-10">
                    <label for="query" class="col-sm-4 control-label">Buscar Paciente por nombres o apellidos:</label>
                    <div class="col-sm-8">
                        <input name="query" id="buscar" type="text" class="form-control" autocomplete="off" >
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <!-- <button class="btn btn-primary">
                        <span class="glyphicon glyphicon-search"></span>
                    </button> -->
                </div>
            </form>
          <div class="row">
            <div class="col-md-12">
             <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>TELEFONÍA MÓVIL</th>
                    <th>OPCIONES</th>
                  </tr>
                </thead>
                 <tbody id="pacienteBuscado" >
                 @foreach($patients as $patient)
                     <tr>
                         <td> {{ $patient->nombres }} </td>
                         <td> {{ $patient->apellidos }}</td>
                         <td> {{ $patient->movil }}</td>
                         <td>
                             
                            <a href="{{ url('citas/registrar/'.$patient->id) }}" class="btn btn-primary" title="CITA">
                                 <span class="glyphicon glyphicon-edit"></span>
                            </a>

                            <a href="{{ url('pacientes/verHistorial/'.$patient->id) }}" class="btn btn-primary " title="HISTORIAL">
                                 <span class="glyphicon glyphicon-list-alt"></span>
                            </a>
                         </td>
                     </tr>
                 @endforeach
                 </tbody>
                 
              </table>
              <p id="mensaje"></p>
            </div>

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->

      </div>
@endsection
@section('scripts')
    <script>
        /**
 * Created by Tosh on 24/10/2016.
 */ 
 //Get para mostrar - Post para cambios en la base de datos
$(function () {

        //$('#buscarPaciente').on('submit',eventoBuscar);
        $('#buscar').on('keyup',eventoBuscar);
        function eventoBuscar() {
            event.preventDefault();
            var buscar = $('#buscar').val();
            //alert(buscar);
            var datosEnviados = $('#buscarPaciente').serialize();
            //alert(datosEnviados);
            $.ajax({
                type: 'GET',
                url: '../pacientes',
                // Un objeto con los datos de interes
                data: datosEnviados,
                dataType: 'json',
                encode: true,
                //success es para la respuesta del servidor
                success: function(respuesta){
                    //console.log(data);
                    var html = "";
                    //para que necesito el var HTML-> Todo lo que irá en el TBODY

                    for ( i=0; i < respuesta.length ; i++)
                    {
                        var paciente = respuesta[i];
                        html+= '<tr>'+
                        '<td>'+paciente.nombres+'</td>'+
                        '<td>'+paciente.apellidos+'</td>'+
                        '<td>'+paciente.movil+'</td>'+
                         '<td>'+
                             '<a href="../citas/registrar/'+paciente.id+'" class="btn btn-primary">'+
                                 '<span class="glyphicon glyphicon-edit" title="CITA"></span>'+
                             '</a>'+

                                '  '+
                             '<a href="verHistorial/'+paciente.id+'" class="btn btn-primary" title="HISTORIAL">'+
                                 '<span class="glyphicon glyphicon-list-alt"></span>'+
                             '</a>'+
                         '</td>'+
                        '</tr>';   
                    }
                    $('#pacienteBuscado').html(html);
                    //$('#buscar').val('');
                    // Mensaje
                    $('#mensaje').html('Se encontraron  '+respuesta.length+'  resultados');
                }
            });



        }
        

});

    </script>
@endsection