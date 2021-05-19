
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
                <input value="{{ old('name') }}" type="text" name="name">
                {!! $errors->first('name', '<br><small>:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Descripcion del producto: <br>
                <input value="{{ old('descripcion') }}" type="text" name="descripcion">
                {!! $errors->first('descripcion', '<br><small>:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Precio del producto: <br>
                <input value="{{ old('precio') }}" type="text" name="precio">
                {!! $errors->first('precio', '<br><small>:message</small><br>') !!}
            </label>
            <p></p>
            <label>
                Stock: <br>
                <input value="{{ old('stock') }}" type="text" name="stock">
                {!! $errors->first('stock', '<br><small>:message</small><br>') !!}
            </label>
            <p></p>
            <label>
            Imagen: <br>
                <input value="{{ old('imagen') }}" type="imagen" name="imagen">
                {!! $errors->first('imagen', '<br><small>:message</small><br>') !!}
            </label>
            <p></p>
            <label>
            Id de la categoría: <br>
            <input value="{{ old('categoria') }}" type="text" name="categoria">
            {!! $errors->first('categoria', '<br><small>:message</small><br>') !!}
            </label>
            <p></p>
            <button class="btn btn-primary">Añadir Producto</button>
            </form>
            
   </center>
</body>
@endsection
@section('contentfooter')
@endsection 