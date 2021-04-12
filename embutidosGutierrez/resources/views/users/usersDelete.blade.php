<h1> Borrar un Usuario</h1>

<form>

    <label method="DELETE" action="{{ route('users.deleteUsers') }}">
        Id del Usuario: <br>   
        <input type="text" name="id">
    </label>
    <br>
    <button>Borrar Usuario</button>

</form>
