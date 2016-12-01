@extends('layouts.starter')

@section('title', 'Historia Clínica')

@section('description', 'Panel De Bienvenida')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ficha Clínica</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
          <!-- contenido -->
         <div class="box-body">

            <form action="{{ url('/pacientes/antecedentes-familiares') }}" method="POST">
              <div class="col-md-12">
              
                <div class="panel panel-info">
                  <div class="panel-heading">Antecedentes Familiares</div>
                  <div class="panel-body">                   
       
                         
                    <div class="form-group">
                      <label for="observacion1">Primera Observación</label>
                      <textarea name="observacion1" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary pull-right">
                      <span class="glyphicon glyphicon-plus"></span>
                    </button>

                         

                  </div>
                  </div>
              </div>

            </form>
            
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
@endsection
