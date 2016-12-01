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

            <form action="">
              <div class="col-md-offset-3 col-md-6">

                <div class="panel panel-success">
                  <div class="panel-heading">Antecedentes Morbidos</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">T.B.C:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Accidentes:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Enfermedades Venéreas:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Alérgias:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Diabetes:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Desmayos:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Convulsiones:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Cefaléas:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Hipertensión:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Operaciones:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Bronquiales:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Vómitos:</div>
                        <div class="panel-body">
                          <div class="checkbox text-center">
                            <label><input type="checkbox" value="">SI</label>
                            <label><input type="checkbox" value="">NO</label>
                          </div>
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>


                    </div>                    

                  </div>
                </div>
                   
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
