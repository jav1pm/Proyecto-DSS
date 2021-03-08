<?php

use Illuminate\Database\Seeder;

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
    }
}
