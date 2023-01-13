<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'codigo', 'modelo', 'stock', 'detalle', 'tipo', 'marca_id',
    ];


    public function marca(){
        return $this->belongsTo(Marca::class);
}
public function compra_detalles(){
    return $this->hasMany(CompraDetalle::class);
}
public function venta_detalles(){
    return $this->hasMany(VentaDetalle::class);
}
}