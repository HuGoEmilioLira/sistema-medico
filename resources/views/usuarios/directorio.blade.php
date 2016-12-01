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
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Usuario</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Hugo Emilio</td>
        <td>Lira Quezada</td>
        <td>hugo@gmail.com</td>
        <td>
           <button class="btn btn-primary ">
             <span class="glyphicon glyphicon-edit"></span>
           </button>
           <button class="btn btn-primary ">
             <span class="glyphicon glyphicon-remove"></span>
           </button>
           
           <a href="{{ url('pacientes/verHistorial') }}" class="btn btn-primary ">
             <span class="glyphicon glyphicon-list-alt"></span>
           </a>
        </td>
      </tr>
      <tr class="danger">
        <td>Juan Carlos</td>
        <td>Ramos Suyón</td>
        <td>juan@gmail.com</td>
        <td>
           <button class="btn btn-primary ">
             <span class="glyphicon glyphicon-edit"></span>
           </button>
           <button class="btn btn-primary ">
             <span class="glyphicon glyphicon-remove"></span>
           </button>
           
           <a href="{{ url('pacientes/verHistorial') }}" class="btn btn-primary ">
             <span class="glyphicon glyphicon-list-alt"></span>
           </a>
        </td>
      </tr>
      <tr class="info">
        <td>Norma Julisa</td>
        <td>Cabos Capuñay</td>
        <td>juli@gmail.com</td>
        <td>
           <button class="btn btn-primary ">
             <span class="glyphicon glyphicon-edit"></span>
           </button>
           <button class="btn btn-primary ">
             <span class="glyphicon glyphicon-remove"></span>
           </button>
           
           <a href="{{ url('pacientes/verHistorial') }}" class="btn btn-primary ">
             <span class="glyphicon glyphicon-list-alt"></span>
           </a>
        </td>
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
