
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Product search</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
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
                  </tr>
                  
               </tbody>
            </table>
      </div>
   </center>
</body>
</html>