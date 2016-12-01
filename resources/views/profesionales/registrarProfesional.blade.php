@extends('layouts.starter')

@section('title', 'Panel De Profesionales')

@section('description', '')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Profesionales Laborales</h3>

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

            <form action="{{ url('/profesionales/registrarProfesional') }}" method="POST">
                {{ csrf_field() }}
                <!-- Token de seguridad -->
                <div class="col-md-12">

                    <div class="panel panel-info">
                        <div class="panel-heading">Datos Generales</div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="nombres">Nombres:</label>
                                <input type="text" name="nombres" class="form-control" value="" placeholder="Ingresar nombres" required>
                            </div>

                            <div class="form-group">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" placeholder="Ingresar apellidos" name="apellidos" class="form-control" value="" >
                            </div>

                            <div class="form-group">
                                <label for="sexo">Sexo:</label>
                                <select name="sexo" id="" class="form-control" >
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otros">Otros</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="categoria">Categoría:</label>
                                <select name="categoria" id="" class="form-control" >
                                    <option value="general">Médico General</option>
                                    <option value="administrativo">Administrativo</option>
                                    <option value="neurologia">Neurología</option>
                                    <option value="pediatria">Pediatría</option>
                                    <option value="cardiologia">Cardiología</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="colegiado">Número De Colegiado:</label>
                                <input type="text" name="colegiado" class="form-control" value="" placeholder="Ingresar Número De Colegiatura">
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado Civíl:</label>
                                <select name="estado" id="" class="form-control" >
                                    <option value="soltero">Soltero</option>
                                    <option value="casado">Casado</option>
                                    <option value="viudo">Viudo</option>
                                    <option value="divorciado">Divorciado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="dni">D.N.I:</label>
                                <input type="text" name="dni" class="form-control" value="" maxlength="8" minlength="8" placeholder="Ingresar D.N.I">
                            </div>

                            <div class="form-group">
                                <label for="fnacimiento">Fecha De Nacimiento:</label>
                                <input type="date" name="fnacimiento" class="form-control" placeholder="Ingresar Fecha De Nacimiento">
                            </div>

                            <div class="form-group">
                                <label for="lnacimiento">Lugar De Nacimiento:</label>
                                <input type="text" name="lnacimiento" class="form-control" value="" placeholder="Ingresar Lugar De Nacimiento">
                            </div>

                            <div class="form-group">
                                <label for="lprocedencia">Lugar De Procedencia:</label>
                                <input type="text" name="lprocedencia" class="form-control" value="" placeholder="Ingresar Lugar De Procedencia">
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" class="form-control" value="" placeholder="Ingresar Dirección">
                            </div>

                            <div class="form-group">
                                <label for="fijo">Telefonía Fija:</label>
                                <input type="text" name="fijo" class="form-control" value="" placeholder="Ingresar Teléfono Fijo">
                            </div>

                            <div class="form-group">
                                <label for="movil">Telefonía Móvil:</label>
                                <input type="text" name="movil" class="form-control" value="" placeholder="Ingresar Celular">
                            </div>

                            <div class="form-group">
                                <label for="observacion">Observaciones:</label>
                                <input type="text" name="observacion" class="form-control" value="" placeholder="Ingresar Observaciones" >
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
