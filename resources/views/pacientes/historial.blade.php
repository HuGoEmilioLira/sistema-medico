@extends('layouts.starter')

@section('title', 'Inicio')

@section('description', 'Panel De Bienvenida')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Registro De Historial Clínico</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <form action="">
              <div class="col-md-6">
              
                <div class="panel panel-info">
                  <div class="panel-heading">Datos Generales</div>
                  <div class="panel-body">                   
       
                    <div class="form-group"> 
                      <label for="nombres">Nombres</label>
                      <input type="text" name="nombres" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="Apellidos">Apellidos</label>
                      <input type="text" name="Apellidos" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="sexo">Sexo</label>
                      <input type="text" name="sexo" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="ocupacion">Ocupación</label>
                      <input type="text" name="ocupacion" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="estadocivil">Estado Civíl</label>
                      <input type="text" name="estadocivil" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="dni">D.N.I</label>
                      <input type="text" name="dni" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="fnacimiento">Fecha De Nacimiento</label>
                      <input type="text" name="fnacimiento" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="lnacimiento">Lugar De Nacimiento</label>
                      <input type="text" name="lnacimiento" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="lprocedencia">Lugar De Procedencia</label>
                      <input type="text" name="lprocedencia" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="Direccióm">Dirección</label>
                      <input type="text" name="Direccióm" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="fijo">Telefonía Fija</label>
                      <input type="text" name="fijo" class="form-control">
                    </div>

                    <div class="form-group"> 
                      <label for="movil">Telefonía Móvil</label>
                      <input type="text" name="movil" class="form-control">
                    </div>

                  </div>
                </div>

                  <!-- Antecedentes Familiares -->
                <div class="panel panel-success">
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
              

              <div class="col-md-6">

                <div class="panel panel-warning">
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

              <!-- historia neurológica -->

              <div class="col-md-12">

                <div class="panel panel-primary">
                  <div class="panel-heading">Historia Neurológica</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">Motivo De Consulta:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Circunstancia:</div>
                        <div class="panel-body">
                         
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                    </div>                    

                  </div>
                </div>
                   
              </div>

              <!-- Funciones Biológicas -->

              <div class="col-md-12">

                <div class="panel panel-success">
                  <div class="panel-heading">Funciones Biológicas</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                    

                    </div>                    

                  </div>
                </div>
                   
              </div>

              <!-- Exámen Clínico General -->

              <div class="col-md-12">

                <div class="panel panel-info">
                  <div class="panel-heading">Exámen Clínico General</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                    

                    </div>                    

                  </div>
                </div>
                   
              </div>

              <!-- Exámen Regional -->

              <div class="col-md-12">

                <div class="panel panel-warning">
                  <div class="panel-heading">Exámen Regional</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                    

                    </div>                    

                  </div>
                </div>
                   
              </div>

              <!-- Exámen Neurológico -->

              <div class="col-md-12">

                <div class="panel panel-primary">
                  <div class="panel-heading">Exámen Neurológico</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                    

                    </div>                    

                  </div>
                </div>
                   
              </div>

              <!-- Diagnósticos -->

              <div class="col-md-12">

                <div class="panel panel-success">
                  <div class="panel-heading">Diagnósticos</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                    

                    </div>                    

                  </div>
                </div>
                   
              </div>

              <!-- Tratamiento -->

              <div class="col-md-12">

                <div class="panel panel-info">
                  <div class="panel-heading">Tratamiento</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                    

                    </div>                    

                  </div>
                </div>
                   
              </div>

              <!-- Exémenes Auxiliares -->

              <div class="col-md-12">

                <div class="panel panel-warning">
                  <div class="panel-heading">Exámenes Auxiliares</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                    

                    </div>                    

                  </div>
                </div>
                   
              </div>

              <!-- Evolución -->

              <div class="col-md-12">

                <div class="panel panel-primary">
                  <div class="panel-heading">Evolución</div>
                  <div class="panel-body">

                    <div class="panel-group">
                      
                      
                      <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
                        </div>
                      </div>

                       <div class="panel panel-default">
                        <div class="panel-heading">Evolución:</div>
                        <div class="panel-body">
                          
                          <textarea name="" id="" class="form-control"></textarea>
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
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
@endsection
