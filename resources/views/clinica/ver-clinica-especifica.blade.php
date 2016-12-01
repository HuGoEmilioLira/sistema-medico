@extends('layouts.starter')

@section('title', 'Inicio')

@section('description', 'Panel De Bienvenida')

@section('content')
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Historial Clínico </h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <ol class="breadcrumb">
        <p class="bg-primary">CLÍNICA: {{$clinic->nombre}} </p>
        <p class="bg-info">DOMICILIO: Urb. {{$clinic->domicilio}}</p>
        <p class="bg-info">TELEFONÍA FIJA: </p>
        <p class="bg-info">TELEFONÍA MÓVIL: {{$clinic->movil}}</p>

      </ol>

    <!-- /.box-body -->

  </div>
@endsection

@section('scripts')
  <script>
    //$(document).on('ready', function () {});
    // selector $() de html
    $(function () {
      //capturamoe el evento en la etiqueta a, eventoEnlace va ser la función
      $('ul.nav-tabs a').on('click', eventoEnlace);

      function eventoEnlace() {
        //evento para que no haga redirección
        event.preventDefault();

        var id = $(this).attr('href');
        //alert(id);
        $('ul.nav-tabs li').removeClass('active');
        $(this).parent().addClass('active');
        $('section.tab-section').hide();
        $('#'+id).show();
      }
    });
  </script>
  <script src="{{ asset('/js/antecedentesFamiliares.js') }}"></script>
@endsection
