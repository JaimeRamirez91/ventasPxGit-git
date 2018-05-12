<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'created_at', 'updated_at','total',
    ];

    protected $hidden = [
        'id',
    ];
    
    //relacion 1 a muchos
    public function ventasdetalles(){
        /*Una venta puede tener varios detalle ventas*/
        return $this->hasMany(Ventadetalle::class, 'id', 'id_venta');
    }

}
