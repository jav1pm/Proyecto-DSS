<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Create order</title>
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
        <li><a href="localhost:8000/orderlines">Lineas de pedido</a></li>
        <li><a href="{{ route('categories.showCategories')}}">Categorias</a></li>
    </ul></nav>
<h1>Agregar nuevo pedido</h1>

<form method="POST" action="{{ route('orders.storeOrder') }}">
    @csrf
    <label>
        Fecha del pedido: <br>   
        <input type="text" name="fecha">
    </label>
    <p></p>
    <label>
        Estado del pedido: <br>
        <input type="text" name="estado">
    </label>
    <p></p>
    <label>
        Direccion del pedido: <br>
        <input type="text" name="direccion">
    </label>
    <p></p>
    <label>
        Pago del pedido: <br>
        <input type="text" name="pago">
    </label>
    <p></p>
    <label>
         Id del usuario: <br>
        <input type="text" name="usuario">
    </label>
    <p></p>
    <button>Añadir pedido</button>
    </form>
    </center>
</body>
</html>