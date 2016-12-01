@extends('layouts.starter')

@section('title', 'Inicio')

@section('description', 'Panel De Bienvenida')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <center><h3 class="box-title">HISTORIAL DE CONSULTAS MÉDICAS</h3></center>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>

          <ol class="breadcrumb">
            <p class="bg-primary">PACIENTE: Lira Quezada, Hugo Emilio</p>
            <p class="bg-info">DIRECCIÓN: Urb. Santa Isabel, Calle Filadelfia 284</p>
            <p class="bg-info">TELEFONÍA FIJA: 044-254385</p>
            <p class="bg-info">TELEFONÍA MÓVIL: 968437417</p>
            
            <!-- <li class="active">Here</li> -->
          </ol>
          <ol class="breadcrumb">
            <center><li><a href=""><i class="fa fa-plus-square"></i>   Nueva Consulta</a></li></center>
          
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
                    <th>ANAMNESIS</th>
                    <th>DIAGNÓSTICO</th>
                    <th>DETALLES</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12/10/2016</td>
                    <td>Descarte de Neumonía</td>
                    <td>Tuberculosis</td>
                    <td>
                      <!--  <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-edit"></span>
                       </button>
                       <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-remove"></span>
                       </button> -->
                       
                       <a href="{{url('consultas/detalle-consulta')}}" class="btn btn-primary ">
                         <span class="glyphicon glyphicon-list-alt"></span>
                       </a>
                    </td>
                  </tr>
                    <tr>
                    <td>07/09/2016</td>
                    <td>Perdida peso excesivo</td>
                    <td>Diabetes</td>
                    <td>
                      <!--  <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-edit"></span>
                       </button>
                       <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-remove"></span>
                       </button> -->
                       
                       <a href="#" class="btn btn-primary ">
                         <span class="glyphicon glyphicon-list-alt"></span>
                       </a>
                    </td>
                  </tr>
                    <tr>
                    <td>10/08/2016</td>
                    <td>Dolor de rodilla constante</td>
                    <td>Osteoporósis</td>
                    <td>
                      <!--  <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-edit"></span>
                       </button>
                       <button class="btn btn-primary ">
                         <span class="glyphicon glyphicon-remove"></span>
                       </button> -->
                       
                       <a href="#" class="btn btn-primary ">
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
