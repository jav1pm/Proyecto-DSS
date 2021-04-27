
<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
   <center>

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
                     <td><a class="btn btn-primary stretched-link" href="{{ route('products.editProduct', $product) }}">Editar</a></td>
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

