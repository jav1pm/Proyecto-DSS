
<body>
@extends('layouts/footer')
@extends('layouts/menu')
@section('contentmenu')
<center>


   <nav class="navbar navbar-light float-right">
         <form class="form-inline">
            <div class="form-group">
            <label for="ordenar">Ordenar por:</label>
            <select id="ordenarOrder" name="ordenarOrder" [(ngModel)]="department" class="form-control">
               <option value="id">id</option>
               <option value="user_id">Usuario</option>
               <option value="fecha">Fecha</option>
               <option value="direccion">Direccion</option>
            </select>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ordenar</button>
         </form>
   </nav>

    <br>
    <a href="{{ route('orders.createOrders')}}">Crear pedido</a>
   <h3> Pedidos </h3>
   <div class="container">
      <table class="table table-striped"; border=“6px”; style="text-align:center">
         <thead style="background: rgba(128, 255, 0, 0.4)">
         <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Direccion</th>
            <th>Pago</th>
         </tr>
         </thead>
         <tbody style="background: rgba(128, 255, 0, 0.15)">
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{$order->user_id}}</td>
                <td>{{ $order->fecha }}</td>
                <td>{{ $order->estado }}</td>
                <td>{{ $order -> direccion }}</td>
                <td>{{ $order->pago }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
      {{$orders-> links()}}
   </div>
   </center>
</body>
@endsection
@section('contentfooter')
@endsection 