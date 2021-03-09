<?php

use Illuminate\Database\Seeder;
use App\Pedido;
use App\Usuario;
use App\LinPed;

class LinPedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('linpeds')->delete();

        $pedido=Pedido::find(1);

        //producto inventado a falta de la clase producto
        $linped1=new LinPed([
            'cantidad'=>'2', 
            'producto_id'=>'25'
        ]);
        $linped1->pedido()->associate($pedido);
        $linped1->save();
    }
}
