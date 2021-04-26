@extends('layouts/menu')
@section('contentmenu')
<body>
<center>
   

      <h3> Linea de pedido </h3>
   <div class="container">
      <table class="table table-striped" border=“6px”; style="text-align:center">
         <thead style="background: rgba(128, 255, 0, 0.4)">
         <tr>
            <th>ID</th>
            <th>Cantidad</th>
            <th>PrecioUnidad</th>
            <th>Direccion</th>
            <th>Pago</th>
         </tr>
         </thead>
         <tbody style="background: rgba(128, 255, 0, 0.15)">
            
            <tr>
                <td>{{ $orderline->id }}</td>
                <td>{{ $orderline->cantidad }}</td>
                <td>{{ $orderline->precioUnidad }}</td>
            </tr>
            
         </tbody>
      </table>
   </div>
</body>
</html>
@endsection