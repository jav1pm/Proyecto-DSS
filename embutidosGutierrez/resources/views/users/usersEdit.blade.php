<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Edit User</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<style>
   menu ul{
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
    <div class = "menu">
      <nav><ul>
         <li><a href="{{ route('products.showProducts')}}">Productos</a></li>
         <li><a href="{{ route('users.showAll')}}">Usuarios</a></li>
         <li><a href="{{ route('orders.showOrders')}}">Pedidos</a></li>
         <li><a href="{{ route('orderlines.showOrderlines')}}">Lineas de pedido</a></li>
         <li><a href="{{ route('categories.showCategories')}}">Categorias</a></li>
      </ul></nav>
   </div>
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