<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Create order</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body>
    <center>
<h1>Agregar nuevo pedido</h1>

<form method="POST" action="{{ route('orders.storeOrder') }}">
    @csrf
    <label>
        Fecha del pedido: <br>   
        <input type="text" name="fecha">
    </label>
    <p></p>
    <label>
        Estado del pedido: <br>
        <input type="text" name="estado">
    </label>
    <p></p>
    <label>
        Direccion del pedido: <br>
        <input type="text" name="direccion">
    </label>
    <p></p>
    <label>
        Pago del pedido: <br>
        <input type="text" name="pago">
    </label>
    <p></p>
    <label>
         Id del usuario: <br>
        <input type="text" name="usuario">
    </label>
    <p></p>
    <button>Añadir pedido</button>
    </form>
    </center>
</body>
</html>