<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')

   <center>
      <h3> Usuario </h3>
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
                  <td><a class="btn btn-primary" href="{{ route('users.editUser', $user) }}">Editar</a></td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </center>
   @endsection
@section('contentfooter')
@endsection
</body>
</html>

