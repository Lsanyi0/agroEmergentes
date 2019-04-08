    <title>Cambiar clave</title>
</head>
<form class="form-signin" align="center" action="" id="CC" method="POST">
    <img class="mb-4" src="img/palmera.png" alt width="72" alt height="72">
    <h1 class="h3 mb-3 font-weight-normal">Usuario</h1>
    <label for="txtUsuario" class="sr-only">Usuario</label>
    <input type="text" name="txtUsuario" class="form-control" value="" placeholder="Nombre usuario" required autofocus>
    <label for="txtClaveA" class="sr-only">Clave anterior</label>
    <input type="password" name="txtClaveA" class="form-control" value="" placeholder="Clave anterior" required>
    <label for="txtClaveN" class="sr-only">Clave</label>
    <input type="password" name="txtCalveN" class="form-control" values="" placeholder="Clave nueva" required>
    <label for="txtClaveC" class="sr-only">Clave</label>
    <input type="password" name="txtCalveC" class="form-control" values="" placeholder="Confirmar nueva clave" required>
    <?php include './Controllers/cambiarclave.php'; ?>
    <input class="btn btn-lg btn-primary btn-block" name="cambiarClave" type="submit" value="Cambiar clave">
    <input class="btn btn-lg btn-secondary btn-block" name="btnCancelar" type="submit" value="Regresar" formnovalidate>
    <p class="mt-5 mb-3 text-muted">© 2019 AsTech</p>
    <i class="fa fa-facebook-official"></i>
    <i class="fa fa-instagram" aria-hidden="true"></i>
    <i class="fa fa-whatsapp" aria-hidden="true"></i>
</form>