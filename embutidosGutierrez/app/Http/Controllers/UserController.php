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
}
