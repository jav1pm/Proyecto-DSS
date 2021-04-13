<h1>Editar el pedido</h1>

<form method="POST" action="{{ route('orders.updateOrder', $order) }}">
    @csrf @method('PATCH')
    <label>
        Fecha del pedido: <br>   
        <input type="text" name="fecha" value="{{ $order->fecha }}">
    </label>
    <br>
    <label>
        Estado del pedido: <br>
        <input type="text" name="estado" value="{{ $order->estado }}">
    </label>
    <br>
    <label>
        Direccion del pedido: <br>
        <input type="text" name="direccion" value="{{ $order->direccion }}">
    </label>
    <br>
    <label>
        Pago del pedido <br>
        <input type="text" name="pago" value="{{ $order->pago }}">
    </label>
    <br>
    <button>Modificar pedido</button>     <a href="{{ route('orders.deleteOrder', $order) }}">Borrar Pedido<a>
    </form>