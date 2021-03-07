<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos', 'email', 'password', 'direccion', 'numCuenta', 'tipoUsuario', 'numCompras'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Función que obtiene los pedidos de un usuario.
    public function pedidos() {
        return $this->hasMany('App\Pedido');
    }
}
