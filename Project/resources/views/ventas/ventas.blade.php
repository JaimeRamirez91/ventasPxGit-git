
@extends('plantillas.base')


@section('contenido')
     @include('plantillas.formularioVentas')
     <div id="vnt-contenedor">
        @include('plantillas.tablaventas')
     </div>
@stop