<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
<style>
#mitabla{
    vertical-align: middle;
}
</style>
<div class="container-fluid">
    <br>
    @foreach($orders as $order)
    <div class="row justify-content-center">
        <div class="col-8">
            
            <div class="card">
                <h2 class="card-header">{{ $order->fecha }}</h2>
                <div class="card-body">
                    <h5 class="card-title">Precio: €</h5><!-- pon aqui el precio total -->
                    
                        <table id= "mitabla" class="table table-hover ";   style="text-align:center">
                                <thead>
                            <tr>
                                <th>Productos</th>
                                <th>Cantidad</th>

                            </tr>
                            </thead>
                            <tbody >
                                <tr >
                                    <td>nombre del producto</td><!-- pon aqui el nombre del produco -->  
                                    <td>cantidad</td>              
                            </tbody>
                        </table>
                        
                </div>
                <div class="card-footer">
                    <h5 >ID:{{ $order->id }}</h5>
                </div>
            </div>
        </div >
    </div >
    <br>
    @endforeach
    <center>
    {{$orders-> links()}}
    </center>
    
    
    
<br>
</body>
@endsection
@section('contentfooter')
@endsection 