<?php

use Illuminate\Database\Seeder;
use App\Pedido;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('pedidos')->delete();

        // Recuperar el segundo usuario (cliente).
        $usuario2 = Usuario::find(2);

        // Añadimos una entrada a esta tabla
        $pedido1 = new Pedido([
            'fecha' => date_create('2021-03-07'),
            'estado' => 'En envío',
            'direccion' => 'Copiar dirección guardada en usuario2',
            'pago' => 'Copiar pago guardado en usuario2',
            'usuario' => $usuario2
        ]);
        $pedido1->usuario()->associate($usuario2);
        $pedido1->save();     
    }
}