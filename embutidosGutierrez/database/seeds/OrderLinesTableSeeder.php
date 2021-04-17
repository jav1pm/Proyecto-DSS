<?php

use Illuminate\Database\Seeder;
use App\Orderline;
use App\Order;
use App\User;
use App\Product;

class OrderLinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('orderlines')->delete();

        // Recuperamos el primer producto
        $producto = Product::find(1);

        // Recuperamos el primer pedido
        $pedido = Order::find(1);

        //producto inventado a falta de la clase producto
        $orderline = new Orderline([
            'cantidad'=>'2',
            'precioUnidad' => $producto -> precio
        ]);
        $orderline->product()->associate($producto);
        $orderline->order()->associate($pedido);
        $orderline->save();
    }
}
