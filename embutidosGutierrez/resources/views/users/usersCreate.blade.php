
<h1> Crear nuevo usuario</h1>

<form method="POST" action="{{ route('users.storeUsers') }}">
    @csrf
    <label>
        Nombre de usuario: <br>   
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Apellidos del usuario: <br>
        <input type="text" name="secondnames">
    </label>
    <br>
    <label>
        Email del usuario: <br>
        <input type="text" name="email">
    </label>
    <br>
    <label>
        Contraseña: <br>
        <input type="password" name="password">
    </label>
    <br>
    <label>
        Número de teléfono: <br>
        <input type="text" name="tlf">
    </label>
    <br>
    <label>
        Esadmin:
        <input type="text" name="admin">
    </label>
    <br>
    <label>
        Direccion: <br>
        <input type="text" name="direccion">
    </label>
    <br>
    <label> 
        Pago: <br>
        <input type="text" name="pago">
    </label>
    <br>
    <button>Crear Usuario</button>
    </form>


