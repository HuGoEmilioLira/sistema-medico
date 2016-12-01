@extends('layouts.starter')

@section('title', 'Historia Clínica')

@section('description', 'Panel De Bienvenida')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Ficha Clínica</h3>

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

            <form action="{{ url('/pacientes/datos-generales') }}" method="POST">
                {{ csrf_field() }}
                <!-- Token de seguridad -->
                <div class="col-md-12">

                    <div class="panel panel-info">
                        <div class="panel-heading">Datos Generales</div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" name="nombres" class="form-control" value="" required>
                            </div>

                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" value="" >
                            </div>

                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="" class="form-control" >
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otros">Otros</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="ocupacion">Ocupación</label>
                                <input type="text" name="ocupacion" class="form-control"
                                       value="" >
                            </div>

                            <div class="form-group">
                                <label for="estado_civil">Estado Civíl</label>
                                <select name="estado_civil" id="" class="form-control" >
                                    <option value="soltero">Soltero</option>
                                    <option value="casado">Casado</option>
                                    <option value="viudo">Viudo</option>
                                    <option value="divorciado">Divorciado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="dni">D.N.I</label>
                                <input type="text" name="dni" class="form-control" value="" maxlength="8" minlength="8">
                            </div>

                            <div class="form-group">
                                <label for="fnacimiento">Fecha De Nacimiento</label>
                                <input type="date" name="fnacimiento" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="lnacimiento">Lugar De Nacimiento</label>
                                <input type="text" name="lnacimiento" class="form-control" value="" >
                            </div>

                            <div class="form-group">
                                <label for="lprocedencia">Lugar De Procedencia</label>
                                <input type="text" name="lprocedencia" class="form-control" value="" >
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" name="direccion" class="form-control"
                                       value="" >
                            </div>

                            <div class="form-group">
                                <label for="fijo">Telefonía Fija</label>
                                <input type="text" name="fijo" class="form-control" value="" >
                            </div>

                            <div class="form-group">
                                <label for="movil">Telefonía Móvil</label>
                                <input type="text" name="movil" class="form-control" value="" >
                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary">Registrar </button>
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
