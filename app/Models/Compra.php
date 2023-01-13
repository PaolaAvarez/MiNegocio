<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'user_id', 'fecha', 'total', 'estado',
    ];
    public function user(){
        return $this->belongsTo(User::class);
}
public function compra_detalles(){
    return $this->hasMany(CompraDetalle::class);
}
}
