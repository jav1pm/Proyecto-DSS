<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Products Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
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