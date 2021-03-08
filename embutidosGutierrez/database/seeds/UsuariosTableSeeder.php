<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('usuarios')->delete();

        $usuario1 = new Usuario([
            'nombre' => 'Javi',
            'apellidos' => ' Perez',
            'email' => 'javi18pm@gmail.com',
            'password' => bcrypt('3mbut1d0'),
            'telefono' => '654428170',
            'tipoUsuario' => 'admin'
        ]);
        $usuario1->save();
        //DB::table('usuarios')->insert($usuario1);
        

        $usuario2 = new Usuario([
            'nombre' => 'Fran',
            'apellidos' => 'Murcia',
            'email' => 'fmurciag@gmail.com',
            'password' => bcrypt('mur1c4'),
            'direccion' => 'Calle Murcia',
            'ciudad' => 'Murcia',
            'telefono' => '649887045',
            'tipoUsuario' => 'cliente'
        ]);
        $usuario2->save();
    }
}
