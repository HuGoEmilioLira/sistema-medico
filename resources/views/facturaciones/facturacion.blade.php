@extends('layouts.starter')

@section('title', 'PANEL DE REGISTRO DE COMPROBANTES')

@section('description', '')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Facturaciones </h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            {{--ul=lista , li=item , a=enlace--}}

            <ul class="nav nav-tabs nav-justified ">
                <li role="presentation" class="active"><a href="datos_generales">Datos Generales</a></li>
                <li role="presentation"><a href="conceptos_facturar">Concepto a Facturar</a></li>
                <li role="presentation"><a href="listado_facturas">Listado Facturas</a></li>
            </ul>

            @include('facturaciones.datos_generales')
            @include('facturaciones.conceptos_facturar')
            @include('facturaciones.listado_facturas')


        </div>


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
    <script src="{{ asset('/js/examenesAuxiliares.js') }}"></script>
@endsection
