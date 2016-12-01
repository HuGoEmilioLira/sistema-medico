@extends('layouts.starter')

@section('title', 'Generalidades De La Clínica')

@section('description', '')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Este panel permitirá registrar todos los datos de la clínica</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
          <!-- contenido -->
         <div class="box-body">

            <form action="{{  url('/clinica/registrar-clinica') }}" method="POST">
              {{ csrf_field() }}
              {{--Token de seguridad  csrf_field() --}}
              <div class="col-md-12">
              
                <div class="panel panel-info">
                  <div class="panel-heading">Datos De La Clínica</div>
                  <div class="panel-body">                   
       
                    <div class="form-group"> 
                      <label for="nombre">Nombre Comercial:</label>
                      <input type="text" name="nombre" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="razon">Razón Social:</label>
                      <input type="text" name="razon" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="domicilio">Domicilio Fiscal:</label>
                      <input type="text" name="domicilio" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="ruc">R.U.C:</label>
                      <input type="text" name="ruc" class="form-control"  maxlength="11" minlength="11" required>
                    </div>
                    <div class="form-group"> 
                      <label for="contribuyente">Tipo De Contribuyente:</label>
                      <input type="text" name="contribuyente" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="giro">Giro Del Negocio:</label>
                      <input type="text" name="giro" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="distrito">Distrito:</label>
                      <input type="text" name="distrito" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="provincia">Provincia:</label>
                      <input type="text" name="provincia" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="departamento">Departamento:</label>
                      <input type="text" name="departamento" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="pais">País:</label>
                      <input type="text" name="pais" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="fijo">Telefonía Fija:</label>
                      <input type="text" name="fijo" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="correo">Correo Coorporativo:</label>
                      <input type="text" name="correo" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="web">Página Web:</label>
                      <input type="text" name="web" class="form-control" required >
                    </div>
                    <div class="form-group"> 
                      <label for="observacion">Observación</label>
                      <input type="text" name="observacion" class="form-control" required >
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
        <div class="box-footer">
          <a href="https://select2.github.io/"></a> 
        </div>
      </div>
@endsection
