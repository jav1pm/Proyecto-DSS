<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Embutidos Gutierrez</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light "style="background-color:F5F5F5;">
      <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="navbar-brand" href="{{ route('home')}}">Home</a>
            <a class="nav-link" style="font-size 50px" href="{{ route('products.showProducts')}}">Productos</a>
            <a class="nav-link" href="{{ route('users.showAll')}}">Usuarios</a>
            <a class="nav-link" href="{{ route('orders.showOrders')}}">Pedidos</a>
            <a class="nav-link" href="{{ route('orderlines.showOrderlines')}}">Lineas de pedido</a>
            <a class="nav-link" href="{{ route('categories.showCategories')}}">Categorias</a>
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
         </div>
      </div>
      </nav>
      @yield('contentmenu')

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>