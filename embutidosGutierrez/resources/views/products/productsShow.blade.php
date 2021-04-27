
<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
   <center>
         <h3> Producto </h3>
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
                  
                  <tr>
                     <td>{{ $product->id }}</td>
                     <td>{{ $product->nombre }}</td>
                     <td>{{ $product->descripcion }}</td>
                     <td>{{ $product -> precio }}</td>
                     <td>{{ $product -> category_id }}</td>
                     <td>{{ $product->imagen }}</td>
                     <td><a class="btn btn-primary stretched-link" href="{{ route('products.editProduct', $product) }}">Editar</a></td>
                  </tr>
                  
               </tbody>
            </table>
      </div>
   </center>
</body>
@endsection
@section('contentfooter')
@endsection 