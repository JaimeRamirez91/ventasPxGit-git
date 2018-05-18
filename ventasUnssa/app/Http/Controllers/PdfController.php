<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Venta;
use App\Ventadetalle;

class PdfController extends Controller{
    public function crearPDF($productos,$total, $vistaurl,$pdf_tipo, $fecha_ini){    
        $Productos = $productos;
        $Total = $total;
        $view =  \View::make($vistaurl, compact('Productos','Total'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($pdf_tipo==1){return $pdf->stream('reporte');}
        if($pdf_tipo==2){return $pdf->download('reporte.pdf'); }
    }

    public function crear_reporte_porsemana($pdf, $desde, $hasta){
        $vistaurl="pdf.reporte_por_semana";

        $rawProductos = DB::raw("SELECT  p.nombre, p.precio as 'Precio_unitario',sum(v.cantidad) as 'cantidad', sum(v.total) as 'total' FROM  ventadetalles v, productos p 
        WHERE v.id_producto = p.id  and CAST(v.created_at AS DATE) >= '2018-05-16' and CAST(v.created_at AS DATE) <= '2018-05-18'
        GROUP BY p.nombre, p.precio 
        ORDER BY p.nombre;") ;

        $rawOtros = DB::raw("SELECT sum(total) as 'total' FROM  ventadetalles  
        WHERE  CAST(created_at AS DATE) >= '2018-05-16' and CAST(created_at AS DATE) <= '2018-05-18'");

        $productos = DB::select( $rawProductos);
        $total = DB::select($rawOtros);

        return $this->crearPDF($productos, $total, $vistaurl, $pdf, $desde);
       }
    }
   

