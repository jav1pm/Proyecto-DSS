@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
<body>
   <center>

    <nav class="navbar navbar-light float-right">
         <form class="form-inline">
            <div class="form-group">
            <label for="ordenar">Ordenar por:</label>
            <select id="ordenarCategory" name="ordenarCategory" [(ngModel)]="department" class="form-control">
               <option value="id">id</option>
               <option value="nombre">Nombre</option>
               <option value="descripcion">Descripcion</option>
            </select>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ordenar</button>
         </form>
      </nav>

      <h3> Lista de categorias </h3>
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
               @foreach($categories as $category)
               <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->nombre }}</td>
                  <td>{{ $category->descripcion }}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
         {{$categories-> links()}}
      </div>
   </center>
</body>
@endsection
@section('contentfooter')
@endsection 