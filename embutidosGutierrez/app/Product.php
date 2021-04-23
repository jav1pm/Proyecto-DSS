<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'imagen', 'stock'
    ];

    public function category() {
        // Producto tiene la clave ajena category_id.
        return $this->belongsTo('App\Category');
    }

    public function orderlines() {
        return $this->hasMany('App\OrderLine');
    }

}
