@extends('layouts.starter')

@section('title', 'Historial de Documentos')

@section('description', '')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Datos Generales:</h3>
          <ol class="breadcrumb">
            <p class="bg-primary">PACIENTE: Lira Quezada, Hugo Emilio</p>
            <p class="bg-info">DIRECCIÓN: Urb. Santa Isabel, Calle Filadelfia 284</p>
            <p class="bg-info">TELEFONÍA FIJA: 044-254385</p>
            <p class="bg-info">TELEFONÍA MÓVIL: 968437417</p>
            
            <!-- <li class="active">Here</li> -->
          </ol>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
          <!-- contenido -->
         <div class="box-body">

            <form action="">
              <div class="col-md-offset-3 col-md-6">

                <div class="panel panel-success">
                  <div class="panel-heading">Imágenes</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      <div class="panel panel-default">
                      <img src="{{asset('img/user/radiografia.jpg')}}" alt="">  
                      </div>
                      
                      <div class="panel panel-default">
                      <img src="{{asset('img/user/radiografia.jpg')}}" alt="">  
                      </div>

                      <div class="panel panel-default">
                      </div>

                       


                    </div>                    

                  </div>
                </div>
                   
              </div>
            
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
      </div>
@endsection
