<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function showAll() {
        $users = User::all();
        return view('users/usersIndex', compact('users'));
    }
    public function showUser($id) {
        $user = User::findOrfail($id);
        return view('users/usersShow',['user' => $user]);
    }

    public function createUser(){
        return view('users/usersCreate');
    }
    public function storeUsers(){

        $name = request('name');
        $secondnames = request('secondnames');
        $email = request('email');
        $password = request('password');
        $tlf = request('tlf');
        $admin = request('admin');
        $direccion = request('direccion');
        $pago = request('pago');

        return User::create([

            'nombre' => $name,
            'apellidos' => $secondnames,
            'email' => $email,
            'password' => $password,
            'telefono' => $tlf,
            'esAdmin' => settype($admin, 'boolean'),
            'direccion' => $direccion,
            'pago' => $pago,

        ]);

    }

    public function deleteUser(){
        return view('users/usersDelete');
    }

    public function deleteUsers($id){

        return User::delete([

            'id' => $id,

        ]);

    }

    
}
