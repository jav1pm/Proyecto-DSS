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
        $user = User::find($id);
        if(!$user){
            return view('users/usersNotFound');
        }
        return view('users/usersShow',['user' => $user]);

        
    }

    public function showUserByName($nombre) {
        $users = User::all()->where('nombre',$nombre);
        return view('users/usersIndex', compact('users'));
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

        User::create([

            'nombre' => $name,
            'apellidos' => $secondnames,
            'email' => $email,
            'password' => bcrypt($password),
            'telefono' => $tlf,
            'esAdmin' => settype($admin, 'boolean'),
            'direccion' => $direccion,
            'pago' => $pago,

        ]);

        return redirect()->route('users.showAll');

    }

    public function editUser($id){
        $user = User::findOrfail($id);
        return view('users.usersEdit', [
            'user' => $user
        ]);
    }

    public function updateUser(User $user){

        $user->update([
            'nombre' => request('name'),
            'apellidos' => request('secondnames'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'telefono' => request('tlf'),
            'esAdmin' => request('admin'),
            'direccion' => request('direccion'),
            'pago' => request('pago'),

        ]);

            return redirect()->route('users.showAll');
    }

    public function deleteUser(User $user){
        $user->delete();
        return redirect()->route('users.showAll');
    }
}
