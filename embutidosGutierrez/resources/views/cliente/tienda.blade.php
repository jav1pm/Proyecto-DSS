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
        <div class="row">
            <div class="col-1 align-self-start border border-primary">
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    Chorizos
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Salchichones
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    Embuchados
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Quesos
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    Lomos
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Jamones
                    </label>
                </div>
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Otros
                    </label>
                </div>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                    <option selected>Ordenar por:</option>
                    <option value="1">Mas caros</option>
                    <option value="2">Mas baratos</option>
                </select>

            </div>
            <div class="col align-self-end border border-primary">
            
                <div class="card" style="width: 18rem;">
                    <img src="https://laexquisitadenin.com/6292-home_default/1-4-empanada-bonito.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Empanada gallega</h5>
                        <p class="card-text">30€/Kg</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://laexquisitadenin.com/6292-home_default/1-4-empanada-bonito.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Empanada gallega</h5>
                        <p class="card-text">30€/Kg</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://laexquisitadenin.com/6292-home_default/1-4-empanada-bonito.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Empanada gallega</h5>
                        <p class="card-text">30€/Kg</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://laexquisitadenin.com/6292-home_default/1-4-empanada-bonito.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Empanada gallega</h5>
                        <p class="card-text">30€/Kg</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>



</body>
@endsection
@section('contentfooter')
@endsection 