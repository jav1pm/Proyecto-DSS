extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
<body>
    <center>

        <h1>Borrar categoria</h1>

        <form method='DELETE' action="{{ route('categories.deleteCategory', $category) }}">
            @csrf @method('DELETE')
            <label>
                <p>Id de la categoria a borrar: </p>
                <input type="text" id="id" value="{{ $category->id }}">
            </label>
            <p></p>
            <button>Borrar categoria</button>
        </form>
    <center>
</body>
@endsection
@section('contentfooter')
@endsection 