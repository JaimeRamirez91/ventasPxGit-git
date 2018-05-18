@extends('plantillas.base')

@section('contenido')
@include('plantillas.formularioReportes')
<button class="btn  btn-outline-danger btn-xs" onclick="cargarlistado()">
                            <i class="fa fa-remove"></i></button>
@stop