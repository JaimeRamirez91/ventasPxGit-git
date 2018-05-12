<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
       'nombre', 'precio', 'created_at', 'updated_at',
    ];
    protected $hidden = [
        'id',
    ];
    /*
     public function ventadetalle(){
        return $this->hasOne(ventadetalle::class, 'id');
    }*/

}
