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
                    <th>Detalle</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ventas as $dato)
                 
              
                <tr>    
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->created_at}}</td>
                    <td>$ {{$dato->total}}</td>
                    <td>
                        <button class="btn btn-outline-success  btn-xs" onclick="">
                            <i class="fa fa-search"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn  btn-outline-danger btn-xs" >
                            <i class="fa fa-remove"></i></button>
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
             {{$ventas->render()}}
        </div>
    </div>
             
</div>