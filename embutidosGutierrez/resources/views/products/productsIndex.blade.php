
<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
   <center>
   <br>
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col ">
            <form method="POST" action="{{ route('products.buscarUnoPorId') }}">
               @csrf
               
               <div class="mb-3">
                  <input type="text" name="id" placeholder="Id del Poducto">
                  <button class="btn btn-dark">Buscar</button>
               </div>
               
            </form>
         </div>
         <div class="col ">
            <form method="POST" action="{{ route('products.buscarUnoPorNombre') }}">
               @csrf
               <div class="mb-3">
               
                  <input type="text" name="name" placeholder="Nombre del Poducto">
                  <button class="btn btn-dark">Buscar</button>
               </div>
            </form>
         </div>
         

      </div>
      <div class="row justify-content-center">
         <div class="col-3 ">
            <form class="form-inline">
               <div class="form-group">
                  <label for="ordenar">Ordenar por:</label>
                  <select class="form-select" multiple aria-label="multiple select example" id="ordenarProduct" name="ordenarProduct">
                     <option value="id">id</option>
                     <option value="nombre">Nombre</option>
                     <option value="precio">Precio</option>
                     <option value="category_id">Categoria</option>
                  </select>
               </div>
               
               <button class="btn btn-dark mt-2" type="submit">Ordenar</button>
            </form>
         </div>
      </div>
   </div>
   
       
      <div class="container">
            <h3> Lista de productos </h3>
         <div class="container">
            <table class="table table-striped  ";  border=“6px”; style="text-align:center">
               <thead style="background: #ff8000">
               <tr >
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Precio</th>
                  <th>Categoria</th>
                  <th>Imagen</th>
                  <th>Editar</th>
               </tr>
               </thead>
               <tbody>
                  @foreach($products as $product)
                  <tr class="table-warning">
                     <td>{{ $product->id }}</td>
                     <td>{{ $product->nombre }}</td>
                     <td>{{ $product->descripcion }}</td>
                     <td>{{ $product -> precio }}</td>
                     <td>{{ $product -> category_id }}</td>
                     <td>{{ $product->imagen }}</td>
                     <td><a class="btn btn-dark"  href="{{ route('products.editProduct', $product) }}">Editar</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            {{$products-> links()}}
         </div>
      </center>
      
</body>
@endsection
@section('contentfooter')
@endsection 

