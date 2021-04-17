<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Order Lines Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
<body>
<center>
      <h3> Lineas de pedido </h3>
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
            @foreach($orderlines as $orderline)
            <tr>
                <td>{{ $orderline->id }}</td>
                <td>{{ $orderline->cantidad }}</td>
                <td>{{ $orderline->precioUnidad }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</body>
</html>