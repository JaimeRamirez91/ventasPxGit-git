<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventadetalle extends Model
{
    protected $fillable = [
       'cantidad', 'total', 'id_venta', 'id_producto','created_at', 'updated_at',
    ];
    protected $hidden = [
        'id',
    ];
    /*Relaciones 1 a muchos inicio*/
    public function venta(){
        return $this->belongsTo(Venta::class,'id', 'id_venta');
    }
    /*relación 1 a 1*/
    /* public function producto(){
        return $this->belongsTo(Producto::class, 'id', 'id_producto');
    }*/
}
