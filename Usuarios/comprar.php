<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../lib/css/bootstrap.min.css">
  <title>Las palmeras</title>
</head>

<body>
  <!-- Barra de navegación principal-->
  <nav class="navbar navbar-light barraNavP">
    <a class="navbar-brand" href="#">
      <img src="../img/palmera.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <h5 class="tittle d-inline-block align-right">Las Palmeras</h5>
    </a>
    <a style="text-decoration: none; color: white; font-size: 8" href="#">Cerrar Sesión</a>
  </nav>
  <!--Contenido-->
  <div class="row contenido">
    <!--Barra de navegación secundaria-->
    <div class="col-md-3">
      <nav class="nav flex-column nav-pills barraNavS">
        <div style="height:30%; width:100%; text-align:center">
          <img src="img/usuario.png" class="imagen" alt="">
          <div class="usuario">Usuario</div>
        </div>
        <a class="nav-link pill  menu" href="#">Vender</a>
        <a class="nav-link menu" href="#">Inventario</a>
        <a class="nav-link menu" href="#">Comprar</a>
      </nav>
    </div>
    <!--Formulario-->
    <div class="col-md-8 formulario" style="padding-top: 20px;">
      <form>
        <h3 class="titulo" align="center">Comprar</h3>
        <hr>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="listBuscar" class="textoN">Proveedor</label>
            <select class="list-group" id="listBuscar">
              <option class="textoN">1</option>
              <option class="textoN">2</option>
              <option class="textoN">3</option>
              <option class="textoN">4</option>
              <option class="textoN">5</option>
            </select>
          </div>
          <div class="col-md-3"></div>
          <div class="form-group col-md-3">
            <button type="button" class="btn btn-outline-dark botonesM" id="btnAddProveedor">Añadir Proveedor</button>
          </div>
        </div>
        <div class="form-group">
          <label for="txtrepresentante" class="textoN">Representante</label>
          <input type="text" class="form-control" id="txtrepresentante">
        </div>
        <div class="form-group">
          <label for="listProductos" class="textoN">Buscar</label>
          <select multiple class="list-group" id="listProductos">
            <option class="textoN">Producto 1</option>
            <option class="textoN">Producto 2</option>
            <option class="textoN">Producto 3</option>
            <option class="textoN">Producto 4</option>
            <option class="textoN">Producto 5</option>
          </select>
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
          <div class="form-group col-md-5">
            <label for="txtPrecio" class="textoN">Precio</label>
            <input type="number" class="form-control producto" id="txtPrecio">
          </div>
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


        <div class="form-group row botones">
          <div class="col-md-2"></div>
          <button type="button" class="btn btn-info col-md-2" id="btnAgregar">Agregar</button>
          <div class="col-md-1"></div>
          <button type="button" class="btn btn-secondary col-md-2" id="btnComprar">Comprar</button>
          <div class="col-md-1"></div>
          <button type="button" class="btn btn-danger col-md-2" id="btnCancelar">Cancelar</button>
          <div class="col-md-2"></div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>