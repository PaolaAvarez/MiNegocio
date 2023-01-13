<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $fillable = [
        'tipo', 'monto', 'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
}
}
