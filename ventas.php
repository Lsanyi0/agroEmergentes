<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (!isset($_SESSION["infoUsuario"])) {
  header("location: /agroEmergentes/");
}
?>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link href="css/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="lib/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="img/palmera.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>Ventas</title>
</head>

<body>
  <form action="/agroEmergentes/Controllers/logout.php" id="logoff" method="POST">
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand" style="width: 200px; text-align: center" href="ventas.php"><img src="img/palmera.png" alt width="24" alt height="24"> Las palmeras</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <button type="submit" class="btn btn-dark" style="width: 100%; border-radius: 0px" name="cerrar">Cerrar sesion</button>
        </li>
      </ul>
    </nav>
  </form>

  <main role="main" class="col-md-12 ml-sm-12 col-lg-12 px-4">
    <form>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="titulo" align="center">Venta</h3>
            <hr>
            <div class="form-group">
              <label class="textoN">Venta N°0001</label>
            </div>
            <div class="form-group">
              <label for="txtcliente" class="textoN">Cliente</label>
              <input type="text" class="form-control" id="txtcliente">
            </div>
            <div class="row">
              <div class="form-group col-md-5">
                <label for="txtProducto" class="textoN">Producto</label>
                <input type="text" class="form-control producto" id="txtProducto">
              </div>
              <div class="form-group col-md-2">
                <label for="txtCantidad" class="textoN">Cantidad</label>
                <input type="number" min="1" class="form-control producto" id="txtCantidad">
              </div>
            </div>
            <div class="form-group">
              <label for="listBuscar" class="textoN">Buscar</label>
              <select class="custom-select" name="producto[]">
                <option class="textoN">Producto 1</option>
                <option class="textoN">Producto 2</option>
                <option class="textoN">Producto 3</option>
                <option class="textoN">Producto 4</option>
                <option class="textoN">Producto 5</option>
              </select>
            </div>
            <table class="table table-striped table-dark">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Proveedor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Limpiador liquido</td>
                  <td>5</td>
                  <td>Pinesol</td>
                </tr>

              </tbody>
            </table>

            <div class="d-flex justify-content-around" style="padding-top: 10px">

              <button type="button" class="btn btn-primary col-md-3" id="btnVender">Agregar a la venta</button>

              <button type="button" class="btn btn-info col-md-3" id="btnVender">Vender</button>

              <button type="button" class="btn btn-danger col-md-3" id="bntCancelar">Cancelar</button>

            </div>
          </div>
        </div>
    </form>
    </div>
    </div>
  </main>
</body>

</html>