<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MVC PHP</title>

  <!-- Bootstrap core CSS -->
  <link href="assests/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assests/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="?controller=producto">Administrador Productos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a href="?controller=producto&metodo=crearProducto" class="list-group-item list-group-item-action bg-light">Agregar Producto</a>
      </li>
      <li class="nav-item">
      <a href="?controller=producto&metodo=buscarproducto" class="list-group-item list-group-item-action bg-light">Buscar Producto</a>
      </li>
      <li class="nav-item">
        <a class="list-group-item list-group-item-action bg-light" href="#">Modificar Producto - no disponible</a>
      </li>
    </ul>
  </div>
</nav>

  
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="assests/vendor/jquery/jquery.min.js"></script>
  <script src="assests/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>