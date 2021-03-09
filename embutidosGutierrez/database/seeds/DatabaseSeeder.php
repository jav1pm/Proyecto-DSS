<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosTableSeeder::class);
        $this->command->info('Usuarios table seeded!');

        $this->call(PedidosTableSeeder::class);
        $this->command->info('Pedidos table seeded!');

        $this->call(LinPedsTableSeeder ::class);
        $this->command->info('LinPed table seeded!');
    }
}
