<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function showAll(Request $request) {
        $res = $request->get('ordenarUser');
        if(!$res)
        {
            $res = 'id';
        }
        $users = User::orderBy($res,'asc')->paginate(5);
        return view('users/usersIndex', compact('users'));
    }
    public function showUser($id) {
        $user = User::find($id);
        if(!$user){
            return view('NotFound');
        }
        return view('users/usersShow',['user' => $user]);

        
    }

    public function buscarUsuarioPorNombre() {
        $nombre=request('nombre');
        $users = User::all()->where('nombre',$nombre);
        return view('users/usersShowByName', compact('users'));
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

        request()->validate([
            'name' => 'required',
            'secondnames' => 'required',
            'email' => 'required|unique:users|max:255|email',
            'password' => 'required',
            'tlf' => 'required|digits:9',
            'admin' => 'required|boolean',
            'direccion' => 'required',
            'pago' => 'required'
        ]);

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

    public function storeUser(Request $req){

        $user = new User;
        $user->nombre = $req->input('name');
        $user->apellidos = $req->input('surname');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password'));
        $user->esAdmin = false;

        $userDB = DB::table('users')->where('email', $user->email)->value('email');

        if($userDB == $user->email){
            return redirect('register')->with('flash_eq', 'Usuario ya registrado, prueba con otro ;)');
        }
        else {
            $user->save();

            return redirect('login')->with('flash', 'Registrado con éxito, Inicia sesión!');
        }
    }
}
