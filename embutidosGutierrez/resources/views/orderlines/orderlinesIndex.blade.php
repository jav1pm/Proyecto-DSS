@extends('layouts/menu')
@section('contentmenu')
<body>
<center>
<nav><ul>

    <nav class="navbar navbar-light float-right">
         <form class="form-inline">
            <div class="form-group">
            <label for="ordenar">Ordenar por:</label>
            <select id="ordenarOrderline" name="ordenarOrderline" [(ngModel)]="department" class="form-control">
               <option value="id">id</option>
               <option value="cantidad">Cantidad</option>
               <option value="precio">Precio</option>
            </select>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ordenar</button>
         </form>
      </nav>

      <h3> Lineas de pedido </h3>
   <div class="container">
      <table class="table table-striped" border=“6px”; style="text-align:center">
         <thead style="background: rgba(128, 255, 0, 0.4)">
         <tr>
            <th>ID</th>
            <th>Cantidad</th>
            <th>PrecioUnidad</th>
         </tr>
         </thead>
         <tbody style="background: rgba(128, 255, 0, 0.15)">
            @foreach($orderlines as $orderline)
            <tr>
                <td>{{ $orderline->id }}</td>
                <td>{{ $orderline->cantidad }}</td>
                <td>{{ $orderline->precioUnidad }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
      {{$orderlines-> links()}}
   </div>
</body>
</html>
@endsection