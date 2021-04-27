<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')


    <div class="container-fluid">
        <h1 class="display-3">Charcuteria</h1>
        <blockquote class="blockquote">
            <p class="p2">En nuestra tienda contamos con charcutería, donde encontrarás embutidos de gran calidad. Jamón serrano, jamón ibérico o de bellota, quesos, chorizo... Los productos más tradicionales de nuestra gastronomía.</p>
        </blockquote>
    </div>
    <br>
    <div class="container-fluid">
        <center>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    Chorizos
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Salchichones
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    Embuchados
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Quesos
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    Lomos
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Jamones
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Otros
                    </label>
                </div>
                <select>
                    <option selected>Ordenar por:</option>
                    <option value="1">Mas caros</option>
                    <option value="2">Mas baratos</option>
                </select>
                
            </center>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
        @foreach($products as $product)
            <div class="col-lg-3 col-mg-5 col-sm-12">
            
                <div class="card">
                    <img src={{ $product->imagen }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nombre }}</h5>
                        <p class="card-text">{{ $product -> precio }}</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
        <br>
        <center>
            {{$products-> links()}}
        </center>
    </div>



</body>
@endsection
@section('contentfooter')
@endsection 