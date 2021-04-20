<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Users Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<style>
   ul{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-size:0;
      }
            
      nav a{
         text-decoration:none;
         color:inherit;
         font-size:14px;
      } 
      nav li{
         display:inline-block;
         width:10%;
         padding:5px 10px;
         background-color:#000;
         border:1px solid #000;
         text-align:center;
         color:#fff;
      }
      nav li:hover{
         background-color:#fff;
         color:#000;
      }
</style>
<body>
   <center>
   <nav><ul>
        <li><a href="{{ route('products.showProducts')}}">Productos</a></li>
        <li><a href="{{ route('users.showAll')}}">Usuarios</a></li>
        <li><a href="{{ route('orders.showOrders')}}">Pedidos</a></li>
        <li><a href="{{ route('categories.showCategories')}}">Lineas de pedido</a></li>
        <li><a href="{{ route('categories.showCategories')}}">Categorias</a></li>
    </ul></nav>

    <form method="POST" action="{{ route('users.buscarUsuarioPorNombre') }}">
            @csrf
            <label>
            Nombre del Usuario a Buscar: <br> 
               <input type="text" name="nombre">
            </label>
            <button>Buscar</button>
      </form>
      <a href="{{ route('users.createUser') }}">Crear usuario</a>
   
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