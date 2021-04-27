
<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
   <center>
        <h1>Agregar nuevo producto</h1>

        <form method="POST" action="{{ route('products.storeProducts') }}">
            @csrf
            <label>
                Nombre del producto:<br>
                <input type="text" name="name">
            </label>
            <p></p>
            <label>
                Descripcion del producto: <br>
                <input type="text" name="descripcion">
            </label>
            <p></p>
            <label>
                Precio del producto: <br>
                <input type="text" name="precio">
            </label>
            <p></p>
            <label>
            Imagen: <br>
                <input type="imagen" name="imagen">
            </label>
            <p></p>
            <label>
            Id de la categoría: <br>
            <input type="text" name="categoria">
            </label>
            <p></p>
            <button class="btn btn-primary">Añadir Producto</button>
            </form>
            
   </center>
</body>
@endsection
@section('contentfooter')
@endsection 