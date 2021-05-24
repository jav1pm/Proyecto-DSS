<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')

<br>
<style>
#mitabla{
    vertical-align: middle;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
            <table id= "mitabla" class="table table-hover ";   style="text-align:center">
                <thead>
            <tr>
                <th>Producto</th>
                <!-- <th>Imagen</th> -->
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody >
                @foreach($orderlines as $orderline)
                <tr >
                    <td>{{ $orderline->product->nombre}}</td><!-- pon aqui el nombre del produco no el id -->
                    
                    <td>{{ $orderline->cantidad }}</td>
                    <td>{{ $orderline->precioUnidad }}€</td>
                    <td>{{ $orderline->precioUnidad * $orderline->cantidad }}€</td>
                    <td><a class="btn btn-danger"  href="{{ route('orderlines.deleteOrderlineClient', $orderline)}}">Eliminar</a></td>
                </tr>
                @endforeach
            </tbody>
            
            <tfoot>
            <td><a class="btn btn-dark"  href="/tienda">Seguir comprando</a></td>
            </tfoot>
            </table>
            
            </div>
        </div>
        <div class="col-2">
        
                <div class="row ">
                    <h1>Total: {{ $precioTotal }} €
                </div>
                <div class="row ">
                    <div class="col-5 ">
                    <!-- Modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg>
                            Comprar
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Finalizar compra</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- formulario de compra -->
                                    <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                                        <input type="text" class="form-control" id="recipient-name">

                                        <label for="message-text" class="col-form-label">Tarjeta:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <button type="button" class="btn btn-primary">Comprar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
    </div>
</div>



   

<br>
    






</body>
@endsection
@section('contentfooter')
@endsection 