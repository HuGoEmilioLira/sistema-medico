@extends('layouts.starter')

@section('title', 'Directorio De Usuarios')

@section('description', '')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Lista De Usuarios</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
  <table class="table table-hover text-center" >
    <thead>
      <tr>
        <th>CÓDIGO</th>
        <th>USUARIO</th>
        <th>FECHA Y HORA</th>
        <th>OPERACIÓN</th>
        <th>IP</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>1013300812</td>
        <td>hugoelq7@gmail.com</td>
        <td>03/10/16 - 14:00 pm</td>
        <td>Eliminar Datos Clínica</td>
        <td>192.192.1.2</td>
      </tr>
      <tr class="danger">
       <td>1013300811</td>
        <td>juan@gmail.com</td>
        <td>03/10/16 - 08:36 am</td>
        <td>Editar Datos Clínica</td>
        <td>188.192.1.2</td>
      </tr>
      <tr class="info">
        <td>1013300810</td>
        <td>julisa@gmail.com</td>
        <td>03/10/16 - 20:52 pm</td>
        <td>Registrar Datos Clínica</td>
        <td>158.192.1.2</td>
      </tr>
    </tbody>
  </table>
            </div>

            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
@endsection
