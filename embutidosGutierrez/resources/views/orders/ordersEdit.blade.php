
<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
    <center>

<h1>Editar el pedido</h1>

<form method="POST" action="{{ route('orders.updateOrder', $order) }}">
    @csrf @method('PATCH')
    <label>
        Fecha del pedido: <br>   
        <input type="text" name="fecha" value="{{ $order->fecha }}">
    </label>
    <p></p>
    <label>
        Estado del pedido: <br>
        <input type="text" name="estado" value="{{ $order->estado }}">
    </label>
    <p></p>
    <label>
        Direccion del pedido: <br>
        <input type="text" name="direccion" value="{{ $order->direccion }}">
    </label>
    <p></p>
    <label>
        Pago del pedido <br>
        <input type="text" name="pago" value="{{ $order->pago }}">
    </label>
    <p></p>
    <button class="btn btn-dark">Modificar pedido</button>     <a class="btn btn-danger" href="{{ route('orders.deleteOrder', $order) }}">Borrar Pedido<a>
    </form>
    </center>
</body>
@endsection
@section('contentfooter')
@endsection 