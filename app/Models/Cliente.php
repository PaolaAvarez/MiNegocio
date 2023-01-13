<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre', 'ci', 'celular', 'email',
    ];
    public function venta_detalles(){
        return $this->hasMany(VentaDetalle::class);
    }
}
