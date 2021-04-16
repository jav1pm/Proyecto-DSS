<h1>Borrar categoria</h1>

<form method='DELETE' action="{{ route('categories.deleteCategory', $category) }}">
    @csrf @method('DELETE')
    <label>
        Id de la categoria a borrar: <br>
        <input type="text" id="id" value="{{ $category->id }}">
    </label>
    <br>
    <button>Borrar categoria</button>
    </form>