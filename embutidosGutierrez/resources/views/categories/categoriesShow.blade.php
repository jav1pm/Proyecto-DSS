
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
            <th>ID<th>
            <th>nombre</th>
            <th>descripcion</th>
         </tr>
         </thead>
         <tbody>
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->nombre }}</td>
                <td>{{ $category->descripcion }}</td>
            </tr>
         </tbody>
      </table>
   </div>
</body>
</html>