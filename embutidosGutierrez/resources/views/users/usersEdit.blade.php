<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Edit User</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body>
    <center>
        <h1> Editar Usuario</h1>

        <form method='POST' action="{{ route('users.updateUser', $user) }}">
            @csrf @method('PATCH')
            <label>
                Nombre de usuario: <br>
                <input type="text" name="name" value="{{ $user->nombre }}">
            </label>
            <p></p>
            <label>
                Apellidos del usuario: <br>
                <input type="text" name="secondnames" value="{{ $user->apellidos }}">
            </label>
            <p></p>
            <label>
                Email del usuario: <br>
                <input type="text" name="email" value="{{ $user->email }}">
            </label>
            <p></p>
            <label>
                Contraseña: <br>
                <input type="password" name="password" value="{{ $user->password }}">
            </label>
            <p></p>
            <label>
                Número de teléfono: <br>
                <input type="text" name="tlf" value="{{ $user->telefono }}">
            </label>
            <p></p>
            <label>
                Esadmin: <br>
                <input type="text" name="admin" value="{{ $user->esAdmin }}">
            </label>
            <p></p>
            <label>
                Direccion: <br>
                <input type="text" name="direccion" value="{{ $user->direccion }}">
            </label>
            <p></p>
            <label> 
                Pago: <br>
                <input type="text" name="pago" value="{{ $user->pago }}">
            </label>
            <p></p>
            <button>Editar Usuario</button>
            <a href="{{ route('users.deleteUser', $user) }}">Borrar<a>
            </form>
        <center>
</body>