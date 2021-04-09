
<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Users Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
   <div class="container">
      <table class="table table-striped">
         <thead>
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
         </tr>
         </thead>
         <tbody>
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
            </tr>
         </tbody>
      </table>
   </div>
</body>
</html>