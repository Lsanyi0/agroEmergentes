<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link href="css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="lib/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="img/palmera.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>Principal</title>
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand" style="width: 200px; text-align: center" href="#"><img src="img/palmera.png" alt width="24" alt height="24"> Las palmeras</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="administrador.php">Cerrar sesion</a>
      </li>
    </ul>
  </nav>
<form action="" id="none" method="POST">
  <div class="container-fluid">
    <div class="row">
      <div class="sidebar">
        <ul class="nav flex-column">
          <li class="nav-item">
          <button type="submit" class="btn btn-dark" style="width: 100%; border-radius: 0px" name="Usuarios">Usuarios</button>
          </li>
          <li class="nav-item">
          <button type="submit" class="btn btn-dark" style="width: 100%; border-radius: 0px" name="Inventario">Inventario</button>
          </li>
          <li class="nav-item">
          <button type="submit" class="btn btn-dark" style="width: 100%; border-radius: 0px" name="Ventas">Ventas</button>
          </li>
          <li class="nav-item">
          <button type="submit" class="btn btn-dark" style="width: 100%; border-radius: 0px" name="Compras">Compras</button>
          </li>
        </ul>
      </div>
</form>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <?php
          include "./Controllers/conexion.php";
          if (isset($_POST['Usuarios']) || isset($_POST['borrar'])) {
            include './Administrador/crudUsuarios.php';
          }
          else if (isset($_POST['editar']) || isset($_POST['btnEditarU']))
          {
            include './Administrador/editarUsuario.php';
          }
          else if (isset($_POST['crearUsuario']) || isset($_POST['btnModificar']))
          {
            include './Administrador/crearUsuarios.php';
          }
          else {
              include './Administrador/adminPrincipal.php';
          }
        ?>
      </main>
    </div>
  </div>

</body>

</html>