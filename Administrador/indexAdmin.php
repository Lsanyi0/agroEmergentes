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
                <img src="img/usuario.png"  class="imagen" alt="">
                <div class="usuario">Administrador</div>
            </div>
            <a class="nav-link menu" href="#">Configuración</a>
            <a class="nav-link menu" href="#">Reportes</a>
          </nav>
    </div>
    <!--Formulario-->
    <div class="col-md-8 formulario" style="padding-top: 20px;">
        <form>
    <!--Menu-->
                <div class="row" style="margin-top:5%">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-3 fondoI" align="center">
                    <a href="../usuariosAdmin.html"><img src="../img/usuarios.png" class="imagenM" alt=""></a>
                    <div class="hr"></div>
                    <div class="usuario">Usuarios</div>
                  </div>
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-3 fondoI" align="center">
                    <a href="../inventario.html"><img src="../img/inventario.png" class="imagenM" alt=""></a>
                    <div class="hr"></div>
                    <div class="usuario">Inventario</div>
                  </div>
                  <div class="col-md-2">
                  </div>
                </div>
                <div class="row" style="margin-top:15%">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-3 fondoI" align="center">
                    <a href="../venta.html"><img src="../img/venta.png" class="imagenM" alt=""></a>
                    <div class="hr"></div>
                    <div class="usuario">Venta</div>
                  </div>
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-3 fondoI" align="center">
                    <a href="../comprar.html"><img src="../img/descarga.png" class="imagenM" alt=""></a>
                    <div class="hr"></div>
                    <div class="usuario">Compra</div>
                  </div>
                  <div class="col-md-2">
                  </div>
                </div>
        </form>
    </div>
    </div>
</body>
</html>