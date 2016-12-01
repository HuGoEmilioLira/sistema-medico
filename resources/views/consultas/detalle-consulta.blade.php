@extends('layouts.starter')

@section('title', 'Panel de consultas')

@section('description', '')

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
          <!-- contenido -->
         <div class="box-body">

            <form action="">
              <div class="col-md-12">
              
                <div class="panel panel-primary">
                  <div class="panel-heading">REGISTRAR CONSULTA</div>
                  <div class="panel-body">                   
       
                  <div class="panel-group">

                      <div class="panel panel-info">
                        <div class="panel-heading">SÍNTOMAS:</div>
                        <div class="panel-body">
                            <div class="form-group"> 
                            <label for="nombres">Primer síntoma</label>
                            <input type="text" name="nombres" class="form-control" value="Tos" readonly>
                            </div>

                            <div class="form-group"> 
                            <label for="sexo">Seleccionar intensidad:</label>
                            <select name="" id="" class="form-control" readonly>
                            <option value="">Regular</option>
                            <option value="">Intensa</option>
                            <option value="">Otros</option>
                            </select>
                            </div>

                            <div class="form-group"> 
                            <label for="nombres">Ingrese una frecuencia (días):</label>
                            <input type="text" name="nombres" class="form-control" value="7" readonly>
                            </div>

                            <ol class="breadcrumb">
                            <center><li><a href=""><i class="fa fa-plus-square"></i>  Síntoma</a></li></center>
                          
                            <!-- <li class="active">Here</li> -->
                           </ol>

                        </div>
                      </div>
                      
                      <div class="panel panel-success">
                        <div class="panel-heading">DIAGNÓSTICO:</div>
                      <div class="panel-body">
                         <div class="form-group"> 
                            <label for="nombres">Descripción:</label>
                            <textarea name="" id="" class="form-control"></textarea>    
                         </div>
                         <div class="form-group"> 
                            <label for="nombres">Recomendación</label>
                            <input type="text" name="nombres" class="form-control" value="Análisis de esputo" readonly>
                         </div>
                        
                      </div>
                      </div>

                      <div class="panel panel-info">
                        <div class="panel-heading">TRATAMIENTO:</div>
                      <div class="panel-body">
                        <div class="checkbox text-left">
                            <label><input type="checkbox" value="">1º Dosis </label><br>
                            <label><input type="checkbox" value="">2º Dosis </label>
                        </div>
                        <div class="checkbox text-left">
                            <label><input type="checkbox" value="">3º Dosis </label><br>
                            <label><input type="checkbox" value="">4º Dosis </label>
                        </div>
                        <div class="checkbox text-left">
                            <label><input type="checkbox" value="">5º Dosis </label><br>
                            <label><input type="checkbox" value="">6º Dosis </label>
                        </div>
                      </div>
                      </div>

                      <div class="panel panel-success">
                        <div class="panel-heading">RECETA:</div>
                      <div class="panel-body">
                         <div class="checkbox text-left">
                            <label><input type="checkbox" value="">Ingerir isoniacida  7 días</label><br>
                            <label><input type="checkbox" value="">Ingerir rifampicina  8 días</label>
                        </div>
                        <div class="checkbox text-left">
                            <label><input type="checkbox" value="">Ingerir Pirazinamida  9 días</label><br>
                            <label><input type="checkbox" value="">Ingerir Estreptomicina  5 días</label><br>
                        </div>
                        <div class="checkbox text-left">
                            
                            <label><input type="checkbox" value="">Ingerir Etambutol  7 días</label>
                            
                        </div>
                        
                      </div>
                      </div>

               

                      <div class="panel panel-info">
                        <div class="panel-heading">OBSERVACIONES:</div>
                      <div class="panel-body">
                        <label for="nombres">Descripción:</label>
                            <textarea name="" id="" class="form-control"></textarea>    
                      </div>
                      </div>


                      <div class="panel panel-success">
                        <div class="panel-heading">DOCUMENTOS:</div>
                      <div class="panel-body">
                        <div class="panel-body">
                        <label for="nombres">Descripción:</label>
                            <textarea name="" id="" class="form-control"></textarea> 

                        <form enctype="multipart/form-data" action="uploader.php" method="POST">
                        <input name="uploadedfile" type="file" class="form-control" />
                        <input type="submit" value="Subir archivo" class="form-control" />
                        </form>   
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
