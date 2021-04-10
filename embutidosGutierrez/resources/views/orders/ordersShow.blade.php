
<<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Users Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
   <div class="container">
      <table class="table table-striped">
         <thead>
         <tr>
            <th>id<th>
            <th>fecha</th>
            <th>estado</th>
            <th>direccion</th>
            <th>pago</th>
         </tr>
         </thead>
         <tbody>
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->fecha }}</td>
                <td>{{ $order->estado }}</td>
                <td>{{ $order->direccion }}</td>
                <td>{{ $order->pago }}</td>
            </tr>
         </tbody>
      </table>
   </div>
</body>
</html>