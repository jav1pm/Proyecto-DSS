<h1> Editar Usuario</h1>

<form method='POST' action="{{ route('users.updateUser', $user) }}">
    @csrf @method('PATCH')
    <label>
        Nombre de usuario: <br>
        <input type="text" name="name" value="{{ $user->nombre }}">
    </label>
    <br>
    <label>
        Apellidos del usuario: <br>
        <input type="text" name="secondnames" value="{{ $user->apellidos }}">
    </label>
    <br>
    <label>
        Email del usuario: <br>
        <input type="text" name="email" value="{{ $user->email }}">
    </label>
    <br>
    <label>
        Contraseña: <br>
        <input type="password" name="password" value="{{ $user->password }}">
    </label>
    <br>
    <label>
        Número de teléfono: <br>
        <input type="text" name="tlf" value="{{ $user->telefono }}">
    </label>
    <br>
    <label>
        Esadmin:
        <input type="text" name="admin" value="{{ $user->esAdmin }}">
    </label>
    <br>
    <label>
        Direccion: <br>
        <input type="text" name="direccion" value="{{ $user->direccion }}">
    </label>
    <br>
    <label> 
        Pago: <br>
        <input type="text" name="pago" value="{{ $user->pago }}">
    </label>
    <br>
    <button>Editar Usuario</button>
    <a href="{{ route('users.deleteUser', $user) }}">Borrar<a>
    </form>
