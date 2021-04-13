<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderLine;
use App\User;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha', 'estado', 'direccion', 'pago'
    ];

    //Función que obtiene el usuario que ha realizado un pedido.
    public function user() {
        // Pedido tiene la clave ajena user_id.
        return $this->belongsTo('App\User');
    }

    //Función que obtiene las líneas de pedido de un pedido.
    public function OrderLines() {
        return $this->hasMany('App\OrderLine');
    }
}
