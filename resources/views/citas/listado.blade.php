@extends('layouts.starter')

@section('title', 'Inicio')

@section('description', 'Panel De Bienvenida')

@section('styles')
    <link rel="stylesheet" href="{{ asset('bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <style>
        .datepicker.datepicker-inline{
            margin: 0 auto;
        }
    </style>
@endsection('styles')

@section('content')
    <div class="row">
        <div class="col-xs-9">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">CITAS MÉDICAS</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-search"></i> Buscar Citas Por Médico</a></li>
                        <li><a href="#"><i class="fa fa-search"></i> Buscar Citas Por Paciente</a></li>
                        <li><a href="{{url('pacientes/datos-generales')}}"><i class="fa fa-plus-square"></i> Pacientes</a></li>
                        <!-- <li class="active">Here</li> -->
                    </ol>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover text-center">
                                <thead>
                                <tr>
                                    <th>FECHA</th>
                                    <th>HORA</th>
                                    <th>DURACIÓN(Min)</th>
                                    <th>PACIENTE</th>
                                    <th>ASUNTO</th>
                                    <th>MÉDICO</th>
                                    <th>DETALLES</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach( $appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->fecha }}</td>
                                    <td>{{ $appointment->hora }}</td>
                                    <td>{{ $appointment->duracion }}</td>
                                    <td>{{ $appointment->patient->nombres }} {{ $appointment->patient->apellidos }}</td>
                                    <td>{{ $appointment->asunto }}</td>
                                    <td>{{ $appointment->professional->nombres }} {{ $appointment->professional->apellidos }} </td>
                                    <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal{{ $appointment->id }}" >Ver</button></td>
                                </tr>
                               @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                </div>
            </div>
        </div>
        <div class="col-xs-3 ">
            <input type="text" name="request_date" id="request_date" value="{{ date('d/m/Y') }}" class="form-control" readonly>
            <div id="datepicker" data-date="{{ date('d/m/Y') }}"></div>
        </div>

    </div>

    @foreach( $appointments as $appointment)

        <div class="modal fade" tabindex="-1" role="dialog" id="myModal{{ $appointment->id }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Detalles De La Cita</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="message-text" class="form-control-label">Asunto:</label>
                                <textarea name="asunto" class="form-control" id="message-text">{{$appointment->asunto}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="medico" class="form-control-label">Médico:</label>
                                <select name="professional_id" id="medico" class="form-control" >
                                    {{--Para cada uno de los elementos de la colección--}}
                                    @foreach($profesionales as $profesional)
                                        <option value="{{ $profesional->id }}" @if($profesional->id == $appointment->professional_id) selected @endif> {{ $profesional->nombres }} {{ $profesional->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row col-md-12">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="fecha">Fecha:</label>
                                        <input type="date" name="fecha" class="form-control" value="{{$appointment->fecha}}">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="hora">Hora:</label>
                                        <div class="input-group clockpicker">
                                            <input type="time" name="hora" class="form-control" value="{{$appointment->hora}}" >
                                            <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label for="duracion">Duración(min):</label>
                                        <div class="input-group clockpicker">
                                            <input  name="duracion" type="number" class="form-control" value="{{$appointment->duracion}}">
                                            <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="recomendacion">Recomendaciones:</label>
                                <textarea name="recomendacion" class="form-control" rows="5" id="comment">{{$appointment->recomendacion}}</textarea>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Actualizar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    @endforeach

@endsection

@section('scripts')
    <script>

            $('#modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Nueva Cita ' + recipient)
            modal.find('.modal-body input').val(recipient)
            })
    </script>

    {{--Formato de Fechas y Horas--}}



    {{--Calendario--}}
    <script src="{{ asset('bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script>
        $(function () 
        {
            $('#datepicker').datepicker(
                {format: 'dd/mm/yyyy' });
                $('#datepicker').on('changeDate', function()
                {$('#request_date').val
                 ($('#datepicker').datepicker('getFormattedDate'));

            console.log($('#datepicker').datepicker('getDate'));});});
    </script>
    

@endsection
