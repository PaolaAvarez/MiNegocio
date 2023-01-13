<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'user_id', 'cliente_id', 'fechaVenta', 'total', 'estado',
    ];
public function user(){
    return $this->belongsTo(User::class);
}
public function cliente(){
    return $this->belongsTo(Cliente::class);
}
public function venta_detalles(){
    return $this->hasMany(VentaDetalle::class);
}
}
