@extends('layouts.starter')

@section('title', 'Panel De Registro De Usuarios')

@section('description', '')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Este panel permitirá registrar los usuarios de la clínica</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
          <!-- contenido -->
         <div class="box-body">

            <form action="">
              <div class="col-md-12">
              
                <div class="panel panel-info">
                  <div class="panel-heading">Registro De Usuarios</div>
                  <div class="panel-body">                   
                  <div class="col-md-6"> 
                    <div class="form-group"> 
                      <label for="usuario">Usuario:</label>
                      <input type="text" name="usuario" class="form-control"  >
                    </div>
                    <div class="form-group"> 
                      <label for="contraseña">Contraseña:</label>
                      <input type="text" name="contraseña" class="form-control"  >
                    </div>
                    <div class="form-group"> 
                      <label for="nombre">Nombres:</label>
                      <input type="text" name="nombre" class="form-control"  >
                    </div>
                    <div class="form-group"> 
                      <label for="apellido">Apellidos:</label>
                      <input type="text" name="apellido" class="form-control"  >
                    </div>
                    <div class="form-group"> 
                      <label for="contribuyente">Fecha de Nacimiento</label>
                      <input type="text" name="contribuyente" class="form-control"  >
                    </div>
                    <div class="form-group"> 
                      <label for="giro">Cargos:</label>
                      <input type="text" name="giro" class="form-control"  >
                    </div>
                    <div class="form-group"> 
                      <label for="distrito">Correo electrónico:</label>
                      <input type="text" name="distrito" class="form-control"  >
                    </div>
                    <div class="form-group"> 
                      <label for="provincia">Telefonía Fija:</label>
                      <input type="text" name="provincia" class="form-control"  >
                    </div>
                    <div class="form-group"> 
                      <label for="departamento">Telefonía Móvil:</label>
                      <input type="text" name="departamento" class="form-control"  >
                    </div>
                  </div>
                  <div class="col-offset-6 col-md-6">
                  <div class="panel panel-success">
                  <div class="panel-heading">Permisos De Accesos</div>
                  <div class="panel-body">                   
                  <div class="col-md-6"> 
                    <div class="form-group"> 
                      <label for="sexo">Clínica:</label>
                      <select name="" id="" class="form-control" readonly>
                        <option value="">Sin Acceso</option>
                        <option value="">Lectura</option>
                        <option value="">Edición</option>
                      </select>
                    </div>
                    <div class="form-group"> 
                      <label for="sexo">Usuarios:</label>
                      <select name="" id="" class="form-control" readonly>
                        <option value="">Sin Acceso</option>
                        <option value="">Lectura</option>
                        <option value="">Edición</option>
                      </select>
                    </div>
                    <div class="form-group"> 
                      <label for="sexo">Pacientes:</label>
                      <select name="" id="" class="form-control" readonly>
                        <option value="">Sin Acceso</option>
                        <option value="">Lectura</option>
                        <option value="">Edición</option>
                      </select>
                    </div>
                    <div class="form-group"> 
                      <label for="sexo">Consultas Médicas:</label>
                      <select name="" id="" class="form-control" readonly>
                        <option value="">Sin Acceso</option>
                        <option value="">Lectura</option>
                        <option value="">Edición</option>
                      </select>
                    </div>
                    <div class="form-group"> 
                      <label for="sexo">Citas Médicas:</label>
                      <select name="" id="" class="form-control" readonly>
                        <option value="">Sin Acceso</option>
                        <option value="">Lectura</option>
                        <option value="">Edición</option>
                      </select>
                    </div>
                    <div class="form-group"> 
                      <label for="sexo">Documentos Clínicos:</label>
                      <select name="" id="" class="form-control" readonly>
                        <option value="">Sin Acceso</option>
                        <option value="">Lectura</option>
                        <option value="">Edición</option>
                      </select>
                    </div>
                    <div class="form-group"> 
                      <label for="sexo">Destino Final:</label>
                      <select name="" id="" class="form-control" readonly>
                        <option value="">Sin Acceso</option>
                        <option value="">Lectura</option>
                        <option value="">Edición</option>
                      </select>
                    </div>
                    <div class="form-group"> 
                      <label for="sexo">Facturación</label>
                      <select name="" id="" class="form-control" readonly>
                        <option value="">Sin Acceso</option>
                        <option value="">Lectura</option>
                        <option value="">Edición</option>
                      </select>
                    </div>
                    
                 </div>
                 
                    


                  </div>
                </div>
                </div>


                  </div>
                </div>

            </form>
            
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="https://select2.github.io/"></a> 
        </div>
      </div>
@endsection
