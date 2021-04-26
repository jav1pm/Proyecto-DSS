@extends('layouts/menu')
@section('contentmenu')
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
      <h3> Categoria </h3>
      <div class="container">
         <table class="table table-striped"; border=“6px”; style="text-align:center">
            <thead style="background: rgba(128, 255, 0, 0.4)">
            <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Descripcion</th>
            </tr>
            </thead>
            <tbody style="background: rgba(128, 255, 0, 0.15)">
              
               <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->nombre }}</td>
                  <td>{{ $category->descripcion }}</td>
               </tr>
               
            </tbody>
         </table>
      </div>
   </center>
</body>
</html>
@endsection