<h1>Agregar nuevo producto</h1>

<form method="POST" action="{{ route('products.storeProducts') }}">
    @csrf
    <label>
        Nombre del producto: <br>   
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Descripcion del producto: <br>
        <input type="text" name="descripcion">
    </label>
    <br>
    <label>
        Precio del producto: <br>
        <input type="text" name="precio">
    </label>
    <br>
    <label>
        Imagen: <br>
        <input type="imagen" name="imagen">
    </label>
    <br>
    <label>
         Id de la categoría: <br>
        <input type="text" name="categoria">
    </label>
    <br>
    <button>Añadir Producto</button>
    </form>
