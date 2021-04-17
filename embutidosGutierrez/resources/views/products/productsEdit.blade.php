<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Edit Products</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body>
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
        Imagen: <br>  
            <input type="imagen" name="imagen" value="{{ $product->imagen }}">
        </label>
        <p></p>
        <label>
        Id de la categoría: <br> 
            <input type="text" name="categoria" value="{{ $product->category_id }}">
        </label>
        <p></p> 
        <button>Editar Producto</button>     <a href="{{ route('products.deleteProduct', $product) }}">Borrar Producto</a>
        </form>
    <center>
</body>
