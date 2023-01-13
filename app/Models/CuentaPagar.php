<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CuentaPagar extends Model
{
    protected $fillable = [
        'codigo', 'entidad', 'fechaPrestamo', 'monto', 'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
}
}
