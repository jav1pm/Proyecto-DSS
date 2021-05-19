
<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
    <center>
    <h1>Editar el producto</h1>

        <form method="POST" action="{{ route('products.updateProduct', $product) }}">
        @csrf @method('PATCH')
        <label>
            Nombre del producto: <br>   
            <input type="text" name="name" value="{{ $product->nombre }}">
        </label>
        <p></p>
        <label>
        Descripcion del producto: <br> 
            <input type="text" name="descripcion" value="{{ $product->descripcion }}">
        </label>
        <p></p>
        <label>
        Precio del producto: <br>  
            <input type="text" name="precio" value="{{ $product->precio }}">
        </label>
        <p></p>
        <label>
        Stock: <br>  
            <input type="text" name="stock" value="{{ $product->stock }}">
        </label>
        <p></p>
        <label>
        Imagen: <br>  
            <input type="imagen" name="imagen" value="{{ $product->imagen }}">
        </label>
        <p></p>
        <label>
        Id de la categoría: <br> 
            <input type="text" name="categoria" value="{{ $product->category_id }}">
        </label>
        <p></p> 
        <button class="btn btn-dark">Editar Producto</button>     <a class="btn btn-danger" href="{{ route('products.deleteProduct', $product) }}">Borrar Producto</a>
        </form>
    <center>
</body>
@endsection
@section('contentfooter')
@endsection 
