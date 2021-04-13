<h1>Editar el producto</h1>

<form method="POST" action="{{ route('products.updateProduct', $product) }}">
    @csrf @method('PATCH')
    <label>
        Nombre del producto: <br>   
        <input type="text" name="name" value="{{ $product->nombre }}">
    </label>
    <br>
    <label>
        Descripcion del producto: <br>
        <input type="text" name="descripcion" value="{{ $product->descripcion }}">
    </label>
    <br>
    <label>
        Precio del producto: <br>
        <input type="text" name="precio" value="{{ $product->precio }}">
    </label>
    <br>
    <label>
        Imagen: <br>
        <input type="imagen" name="imagen" value="{{ $product->imagen }}">
    </label>
    <br>
    <label>
         Id de la categoría: <br>
        <input type="text" name="categoria" value="{{ $product->category_id }}">
    </label>
    <br>
    <button>Añadir Producto</button>     <a href="{{ route('products.deleteProduct', $product) }}">Borrar Producto<a>
    </form>
