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
            <th>ID</th>
            <th>Cantidad</th>
            <th>PrecioUnidad</th>
            <th>Direccion</th>
            <th>Pago</th>
         </tr>
         </thead>
         <tbody>
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