<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\View\Render;
use Validator;
use Illuminate\Validation\Rule;
use App\Venta;
use App\Ventadetalle;

class ventasController extends Controller
{
    function registroVentas(Request $request){

        $datos = $request->all();
        $messages = [
            'folder.numeric'        => '1',
            'impresiones.numeric'   => '2',
            'faster.numeric'        => '3',
            'anillados.numeric'     => '4',
            'pBond.numeric'         => '5',
            'otros.numeric'         => '6',
            'folder.max'            => '1',
            'impresiones.max'       => '2',
            'faster.max'            => '3',
            'anillados.max'         => '4',
            'pBond.max'             => '5',
            'otros.max'             => '6',
        ];

        $validator = Validator::make($datos, [
            'folder'            =>    'nullable | numeric | max:500',
            'impresiones'       =>    'nullable | numeric | max:500',
            'faster'            =>    'nullable | numeric | max:500',
            'anillados'         =>    'nullable | numeric | max:500',
            'pBond'             =>    'nullable | numeric | max:500',
            'otros'             =>    'nullable | numeric | max:500',
          ],  $messages );
         
        
              if ($validator->passes()) {
                // Guaardando el modelo
                /* Creando la venta */
                
                    $venta = new Venta();
                    $venta->save();
            

                    if(strlen($request->folder)>0){
                        $dtFolder = new VentaDetalle;
                        $dtFolder->cantidad = $request->folder;
                        $dtFolder->total =(($request->folder)*0.15);
                        $dtFolder->id_producto = 1;
                        $dtFolder->id_venta = $venta->id;
                        $venta->ventasdetalles()->save($dtFolder);
                    }

                    if(strlen($request->impresiones)>0){
                        $dtImp = new VentaDetalle;
                        $dtImp->cantidad = $request->impresiones;
                        $dtImp->total = (($request->impresiones)*0.1);
                        $dtImp->id_producto = 2;
                        $dtImp->id_venta = $venta->id;
                        $venta->ventasdetalles()->save($dtImp);
                    }
                      
                    if(strlen($request->faster)>0){
                        
                        $dtfaster = new VentaDetalle;
                        $dtfaster->cantidad = $request->faster;
                        $dtfaster->total = (($request->faster)*0.15);
                        $dtfaster->id_producto = 3;
                        $dtfaster->id_venta = $venta->id;
                        $venta->ventasdetalles()->save($dtfaster);
                   }    

                   if(strlen($request->anillados)>0){
                   
                    $dtanillado = new VentaDetalle;
                    $dtanillado->cantidad = $request->anillados;
                    $dtanillado->total = (($request->anillados) * 1);
                    $dtanillado->id_producto = 4;
                    $dtanillado->id_venta = $venta->id;
                    $venta->ventasdetalles()->save($dtanillado);
                   }    

                   if(strlen($request->pBond)>0){
                   
                    $dtpBond = new VentaDetalle;
                    $dtpBond->cantidad = $request->pBond;
                    $dtpBond->total = (($request->pBond) * 0.02);
                    $dtpBond->id_producto = 5;
                    $dtpBond->id_venta = $venta->id;
                    $venta->ventasdetalles()->save($dtpBond);
                   }    

                   
                   if(strlen($request->otros) > 0){
                   
                    $dtotros = new VentaDetalle;
                    $dtotros->cantidad = $request->otros;
                    $dtotros->total = ($request->otros) * 1;
                    $dtotros->id_producto = 6;
                    $dtotros->id_venta = $venta->id;
                    $venta->ventasdetalles()->save($dtotros);
                   } 

                 //listaVentas();
                return response()->json(['msj'=> "REGISTRO INSERTADO"]);

            
              }else{
                 return response()->json(['error'=>$validator->errors()->all()]);
              }      
    }

    function listaVentas(){
       /*Solo aparecen las ventas del día correspondiente */
        $venta = Venta::whereDate('created_at', DB::raw('CURDATE()'))->paginate(7);
        return view('ventas.ventas')->with("ventas", $venta);
    }
   
    function deleteVenta(Request $request){
        $detalle =  Ventadetalle::where("id_venta","=", $request->valor);
        $detalle->delete();
        $venta = Venta::where("id","=", $request->valor); 
        $venta->delete();
        return response()->json(['msj'=> "Registro eliminado"]);
    }
}
