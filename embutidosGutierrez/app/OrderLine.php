<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Order;

class OrderLine extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cantidad', 'precioUnidad'
    ];

    //Función que obtiene el pedido que que contiene una linea de pedido.
    public function order() {
        // LineaPedido tiene la clave ajena order_id.
        return $this->belongsTo('App\Order');
    }
}