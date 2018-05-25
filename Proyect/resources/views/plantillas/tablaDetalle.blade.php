
@extends('plantillas.base')


@section('contenido')
<div class="container margen-top-tabla">
    <div class="row margen-top">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h5 class="text-center">VENTAS DIARIAS</h5> 
                    <table class="table text-center">
                <thead>
                <tr>
                    <th>Correlativo</th>
                    <th>Fecha y hora</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
               
                @foreach($detalle as $dato)
              
                <tr>    
                    <td>dsfsdfdsdf</td>
                   
                    <td>
                       
                    </td>
                    <td>
                        
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
             
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="container" >
        <div class="row">
            
        </div>
    </div>
          
</div>