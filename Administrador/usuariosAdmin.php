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
        <form action="./administracion.php" id="usuarios" method="POST">
        <h3 class="titulo" align="center">Agregar usuario</h3>
            <hr>
            
                            <div class="form-group">
                              <label for="listBuscar" class="textoN">Tipo de usuario</label>
                              <select class="custom-select" name="tipo[]">
                                  <option value="1" class="textoN">Normal</option>
                                  <option value="2" class="textoN">Privilegios</option>
                              </select>
                            </div>
                            <div class="row">
                <div class="form-group col-md-5">
                  <label for="txtProducto" class="textoN">Nombre</label>
                  <input type="text" name="nombre" class="form-control producto">
                </div>
                <div class="form-group col-md-5">
                  <label for="txtCantidad" class="textoN">Apellido</label>
                  <input type="text" name="apellido" class="form-control producto" >
               </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                  <label for="txtProducto" class="textoN">Usuario</label>
                  <input type="text" name="usuario" class="form-control producto">
                </div>
                <div class="form-group col-md-5">
                  <label for="txtCantidad" class="textoN">Contraseña</label>
                  <input type="text" name="constrasena" class="form-control producto">
               </div>
            </div>
            <div class="row">
            <div class="form-group col-md-5">
                  <label for="txtCantidad" class="textoN">Telefono</label>
                  <input type="tel" name="telefono" class="form-control producto">
            </div>
            </div>
            <div class="form-group">
                  <label for="txtCantidad" class="textoN">DUI</label>
                  <input type="text" name="dui" class="form-control producto">
            </div>
            <div class="row">
            <div class="form-group col-md-5">
                  <label for="txtCantidad" class="textoN">Salario</label>
                  <input type="text" name="salario" class="form-control producto">
            </div>
            </div>

                      <div class="form-group row botones">
                            <div class="col-md-2"></div>
                            <input type="submit" class="btn btn-info col-md-3" value="Crear" id="btnModificar">
                            <div class="col-md-2"></div>
                            <button type="button" class="btn btn-danger col-md-3" id="btnCancelar">Cancelar</button>
                            <div class="col-md-2"></div>
                      </div>


   </form>
    </div>
    </div>

</body>
</html>