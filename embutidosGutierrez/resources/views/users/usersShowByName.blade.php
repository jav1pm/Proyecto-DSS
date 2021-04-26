@extends('layouts/menu')
@section('contentmenu')
<body>
   <center>
    <form method="POST" action="{{ route('users.buscarUsuarioPorNombre') }}">
            @csrf
            <label>
            Nombre del Usuario a Buscar: <br> 
               <input type="text" name="nombre">
            </label>
            <button>Buscar</button>
      </form>
      <a href="{{ route('users.createUser') }}">Crear usuario</a>

      <nav class="navbar navbar-light float-right">
         <form class="form-inline">
            <div class="form-group">
            <label for="ordenar">Ordenar por:</label>
            <select id="ordenarUser" name="ordenarUser" [(ngModel)]="department" class="form-control">
               <option value="id">id</option>
               <option value="nombre">Nombre</option>
               <option value="apellidos">Apellidos</option>
               <option value="email">Email</option>
            </select>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ordenar</button>
         </form>
      </nav>

      <h3> Lista de usuarios </h3>
      <div class="container">
         <table class="table table-striped";  border=“6px”; style="text-align:center">
            <thead style="background: rgba(128, 255, 0, 0.4)">
            <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Apellidos</th>
               <th>Email</th>
               <th>Password</th>
               <th>Telefono</th>
               <th>EsAdmin</th>
               <th>Direccion</th>
               <th>Pago</th>
               <th>Editar</th>
            </tr>
            </thead>
            <tbody style="background: rgba(128, 255, 0, 0.15)">
               @foreach($users as $user)
               <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->nombre }}</td>
                  <td>{{ $user->apellidos }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->password }}</td>
                  <td>{{ $user->telefono }}</td>
                  <td>{{ $user->esAdmin }}</td>
                  <td>{{ $user->direccion }}</td>
                  <td>{{ $user->pago }}</td>
                  <td><a href="{{ route('users.editUser', $user) }}">Editar</a></td>
               </tr>
               @endforeach
            </tbody> 
         </table>
      </div>  
   </center>
</body>
</html>
@endsection