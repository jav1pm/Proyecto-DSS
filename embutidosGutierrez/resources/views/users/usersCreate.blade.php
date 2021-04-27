
<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
    <center>

        <h1> Crear nuevo usuario</h1>

        <form method="POST" action="{{ route('users.storeUsers') }}">
            @csrf
            <label>
                Nombre de usuario: <br>   
                <input type="text" name="name">
            </label>
            <p></p> 
            <label>
                Apellidos del usuario: <br>
                <input type="text" name="secondnames">
            </label>
            <p></p> 
            <label>
                Email del usuario: <br>
                <input type="text" name="email">
            </label>
            <p></p> 
            <label>
                Contraseña: <br>
                <input type="password" name="password">
            </label>
            <p></p> 
            <label>
                Número de teléfono: <br>
                <input type="text" name="tlf">
            </label>
            <p></p> 
            <label>
                Esadmin:<br>
                <input type="text" name="admin">
            </label>
            <p></p> 
            <label>
                Direccion: <br>
                <input type="text" name="direccion">
            </label>
            <p></p> 
            <label> 
                Pago: <br>
                <input type="text" name="pago">
            </label>
            <p></p> 
            <button class="btn btn-primary">Crear Usuario</button>
            </form>
        <center>
</body>
@endsection
@section('contentfooter')
@endsection 


