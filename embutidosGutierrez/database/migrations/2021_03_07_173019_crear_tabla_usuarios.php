<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('nombre');
            $table -> string('apellidos');
            $table -> string('email') -> unique();
            $table -> string('direccion')->nullable();
            $table -> string('ciudad')->nullable();
            $table -> string('telefono');
            $table -> string('password');
            $table -> string('tipoUsuario');
            $table->rememberToken();
            $table -> timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
