<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Orders Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
<center>
   <h3> Pedidos </h3>
   <div class="container">
      <table class="table table-striped"; border=“6px”; style="text-align:center">
         <thead style="background: rgba(128, 255, 0, 0.4)">
         <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Direccion</th>
            <th>Pago</th>
         </tr>
         </thead>
         <tbody style="background: rgba(128, 255, 0, 0.15)">
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{$order->user_id}}</td>
                <td>{{ $order->fecha }}</td>
                <td>{{ $order->estado }}</td>
                <td>{{ $order -> direccion }}</td>
                <td>{{ $order->pago }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
   </center>
</body>
</html>