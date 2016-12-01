@extends('layouts.starter')

@section('title', 'Inicio')

@section('description', 'Panel De Bienvenida')

@section('content')
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Listado De Clínicas</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
          <table class="table table-hover text-center">
            <thead>
            <tr>
              <th>NOMBRE COMERCIAL</th>
              <th>DOMICILIO FISCAL</th>
              <th>TELEFONÍA FIJA</th>
              <th>OPCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clinics as $clinic)
              <tr>
                <td> {{ $clinic->nombre }} </td>
                <td> {{ $clinic->domicilio }}</td>
                <td> {{ $clinic->fijo }}</td>
                <td>
                  <button class="btn btn-primary ">
                    <span class="glyphicon glyphicon-edit"></span>
                  </button>
                  <button class="btn btn-primary ">
                    <span class="glyphicon glyphicon-remove"></span>
                  </button>

                  <a href="{{ url('clinica/ver-clinica-especifica/'.$clinic->id) }}" class="btn btn-primary ">
                    <span class="glyphicon glyphicon-list-alt"></span>
                  </a>
                </td>
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

  </div>
@endsection
