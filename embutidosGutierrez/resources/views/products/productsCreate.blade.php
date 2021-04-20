<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Product Edit</title>
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
        <h1>Agregar nuevo producto</h1>

        <form method="POST" action="{{ route('products.storeProducts') }}">
            @csrf
            <label>
                Nombre del producto:<br>
                <input type="text" name="name">
            </label>
            <p></p>
            <label>
                Descripcion del producto: <br>
                <input type="text" name="descripcion">
            </label>
            <p></p>
            <label>
                Precio del producto: <br>
                <input type="text" name="precio">
            </label>
            <p></p>
            <label>
            Imagen: <br>
                <input type="imagen" name="imagen">
            </label>
            <p></p>
            <label>
            Id de la categoría: <br>
            <input type="text" name="categoria">
            </label>
            <p></p>
            <button>Añadir Producto</button>
            </form>
            
   </center>
</body>
