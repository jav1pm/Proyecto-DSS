<h1>Agregar nuevo pedido</h1>

<form method="POST" action="{{ route('orders.storeOrder') }}">
    @csrf
    <label>
        Fecha del pedido: <br>   
        <input type="text" name="fecha">
    </label>
    <br>
    <label>
        Estado del pedido: <br>
        <input type="text" name="estado">
    </label>
    <br>
    <label>
        Direccion del pedido: <br>
        <input type="text" name="direccion">
    </label>
    <br>
    <label>
        Pago del pedido: <br>
        <input type="text" name="pago">
    </label>
    <br>
    <label>
         Id del usuario: <br>
        <input type="text" name="usuario">
    </label>
    <br>
    <button>Añadir pedido</button>
    </form>