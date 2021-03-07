<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //Función que obtiene el usuario que ha realizado un pedido.
    public function usuario() {
        // Pedido tiene la clave ajena usuario.
        return $this->belongsTo('App\Usuario');
    }

    //Función que obtiene las líneas de pedido de un pedido.
    public function linpeds() {
        return $this->hasMany('App\LinPed');
    }
}
