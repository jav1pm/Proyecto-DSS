<?php

use Illuminate\Database\Seeder;
use App\OrderLine;
use App\Order;
use App\User;

class OrderLinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // Borramos los datos de la tabla
        // DB::table('orderlines')->delete();

        // $pedido=Order::find(1);

        // //producto inventado a falta de la clase producto
        // $linped1=new OrderLine([
        //     'cantidad'=>'2'
        // ]);
        // $linped1->order()->associate($pedido);
        // $linped1->save();
    }
}
