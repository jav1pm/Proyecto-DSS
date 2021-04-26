@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
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
@endsection
@section('contentfooter')
@endsection 