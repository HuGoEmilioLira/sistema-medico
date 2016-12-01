@extends('layouts.starter')

@section('title', 'Panel De Destino Final')

@section('description', '')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listado de pacientes con destino final</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-search"></i> Buscar Paciente</a></li>
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
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>TELEFONÍA MÓVIL</th>
                    <th>OPCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Hugo Emilio</td>
                    <td>Lira Quezada</td>
                    <td>968437417</td>
                    <td>
                      <!--  <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-edit"></span>
                       </button>
                       <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-remove"></span>
                       </button> -->
                     
                       <a href="{{ url('destinos/detalle-consulta') }}" class="btn btn-primary ">
                         <span class="glyphicon glyphicon-list-alt"></span>
                       </a>
                    </td>
                  </tr>
                  <tr>
                    <td>Juan Carlos</td>
                    <td>Ramos Suyón</td>
                    <td>994455665</td>
                    <td> 
                       <!-- <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-edit"></span>
                       </button>
                       <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-remove"></span>
                       </button> -->
                       
                         <a href="{{ url('destinos/detalle-consulta') }}" class="btn btn-primary ">
                         <span class="glyphicon glyphicon-list-alt"></span>
                         </a>
                     </td>
                  </tr>
                  <tr>
                    <td>Esmidio</td>
                    <td>Rojas Rodríguez</td>
                    <td>989878453</td>
                    <td> 
                       <!-- <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-edit"></span>
                       </button>
                       <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-remove"></span>
                       </button> -->
                       
                       <a href="{{ url('destinos/detalle-consulta') }}" class="btn btn-primary ">
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
         
        </div>
      </div>
@endsection
