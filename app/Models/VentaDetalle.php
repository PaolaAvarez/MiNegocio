<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    protected $fillable = [
        'venta_id', 'producto_id', 'cantidad', 'precio', 'descuento',
    ];
public function venta(){
    return $this->belongsTo(Venta::class);
}
public function cliente(){
    return $this->belongsTo(Cliente::class);
}
}
