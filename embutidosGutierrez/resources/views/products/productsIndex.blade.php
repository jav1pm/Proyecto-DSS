<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Products Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
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
<?php $product ?>
   
       <form method="POST" action="{{ route('products.buscarUnoPorId') }}">
            @csrf
            <label>
            Id del Poducto a buscar: <br> 
               <input type="text" name="id">
            </label>
            <button>Buscar</button>
         </form>

         <form method="POST" action="{{ route('products.buscarUnoPorNombre') }}">
            @csrf
            <label>
            Nombre del producto a buscar: <br> 
               <input type="text" name="name">
            </label>
            <button>Buscar</button>
         </form>

      <nav class="navbar navbar-light float-right">
         <form class="form-inline">
            <div class="form-group">
            <label for="ordenar">Ordenar por:</label>
            <select id="ordenarProduct" name="ordenarProduct" [(ngModel)]="department" class="form-control">
               <option value="id">id</option>
               <option value="nombre">Nombre</option>
               <option value="precio">Precio</option>
               <option value="category_id">Categoria</option>
            </select>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ordenar</button>
         </form>
      </nav>

      <div class="container">
            <h3> Lista de productos </h3>
         <div class="container">
            <table class="table table-striped";  border=“6px”; style="text-align:center">
               <thead style="background: rgba(128, 255, 0, 0.4)">
               <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Precio</th>
                  <th>Categoria</th>
                  <th>Imagen</th>
                  <th>Editar</th>
               </tr>
               </thead>
               <tbody style="background: rgba(128, 255, 0, 0.15)">
                  @foreach($products as $product)
                  <tr>
                     <td>{{ $product->id }}</td>
                     <td>{{ $product->nombre }}</td>
                     <td>{{ $product->descripcion }}</td>
                     <td>{{ $product -> precio }}</td>
                     <td>{{ $product -> category_id }}</td>
                     <td>{{ $product->imagen }}</td>
                     <td><a href="{{ route('products.editProduct', $product) }}">Editar</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$products-> links()}}
         </div>
      </center>
      
</body>
</html>