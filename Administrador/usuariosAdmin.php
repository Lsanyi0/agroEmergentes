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
            <div style="height:30%; wight:100%; text-align:center">
                    <img src="../img/usuario.png"  class="imagen" alt="">
                    <div class="usuario">Administrador</div>
                </div>
                <a class="nav-link menu" href="#">Configuración</a>
                <a class="nav-link menu" href="#">Reportes</a>
              </nav>
        </div>
    <!--Formulario-->
    <div class="col-md-8 formulario" style="padding-top: 20px;">
        <form>
        <h3 class="titulo" align="center">Venta</h3>
            <hr>
            <div class="form-group">
              <label class="textoN">Venta N°0001</label>
            </div>
            <?php
              
            ?>
                            <div class="form-group">
                              <label for="listBuscar" class="textoN">Proveedor</label>
                              <select class="custom-select" id="inputGroupSelect01">
                                  <option selected>Choose...</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                              </select>
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
              <select multiple class="list-group" id="listBuscar">
                <option class="textoN">Producto 1</option>
                <option class="textoN">Producto 2</option>
                <option class="textoN">Producto 3</option>
                <option class="textoN">Producto 4</option>
                <option class="textoN">Producto 5</option>
              </select>
            </div>

                      <div class="form-group row botones">
                            <div class="col-md-2"></div>
                            <button type="button" class="btn btn-info col-md-3" id="btnModificar">Modificar</button>
                            <div class="col-md-2"></div>
                            <button type="button" class="btn btn-danger col-md-3" id="btnCancelar">Cancelar</button>
                            <div class="col-md-2"></div>
                      </div>


   </form>
    </div>
    </div>

</body>
</html>