<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Pedido;

class Linped extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cantidad', 'producto_id', 'pedido_id'
    ];

    //Función que obtiene el pedido que que contiene una linea de pedido.
    public function pedido() {
        // Pedido tiene la clave ajena usuario.
        return $this->belongsTo('App\Pedido');
    }
    
    
    /*//Función que obtiene los pedidos de un usuario.
    public function producto() {
        return $this->hasOne(App\Productos)

    }*/
}