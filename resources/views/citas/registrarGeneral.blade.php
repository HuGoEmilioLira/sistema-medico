@extends('layouts.starter')

@section('title', 'Panel De Registro De Citas')

@section('description', '')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <center><h3 class="box-title">Cita Clínica</h3></center>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- contenido -->
        <div class="box-body">

            <form action="#" method="POST">
                {{ csrf_field() }}
            
                <div class="col-md-12">

                    <div class="panel panel-info">
                        <div class="panel-heading text-center">Nueva Cita</div>
                        <div class="panel-body">
                            <form class="form-horizontal" id="buscarPaciente" >
                                {{ csrf_field() }}
                                <div class="form-group col-md-10">
                                    <label for="query" class="col-sm-2 control-label">Buscar Paciente:</label>
                                    <div class="col-sm-10">
                                        <input name="query" id="buscar" type="text" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <!-- <button class="btn btn-primary">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button> -->
                                </div>
                            </form>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="message-text" class="form-control-label">Asunto:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="medico" class="form-control-label">Médico:</label>
                                    <select name="medico" id="medico" class="form-control" >
                                        <option value="">Dr. Esmidio Rojas</option>
                                        <option value="">Dr. Juan Namóc</option>
                                        <option value="">Dr. Julio Beltrán</option>
                                        <option value="">Dr. Camilo Santillán</option>
                                    </select>
                                </div>
                                <div class="row col-md-12">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="Fecha">Fecha</label>
                                            <input type="date" name="Fecha" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="Fecha">Hora</label>
                                            <div class="input-group clockpicker">
                                                <input type="text" class="form-control" value="09:30">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="Fecha">Duración</label>
                                            <div class="input-group clockpicker">
                                                <input type="text" class="form-control" value="09:30">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="comment">Recomendaciones:</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                <div class="text-center col-md-12">
                                        <button class="btn btn-primary">Registrar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>

            <!-- /.row -->
        </div>
        <!-- /.box-body -->

        </div>
@endsection
