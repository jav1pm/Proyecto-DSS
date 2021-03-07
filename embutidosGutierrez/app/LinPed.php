<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinPed extends Model
{
    // Función que obtiene el pedido al que pertenece una línea de pedido.
    public function pedido() {
        return $this->belongsTo('App\Pedido');
    }
}