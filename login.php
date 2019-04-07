<form class="form-signin" align="center" action="" id="cambiar" method="POST">
    <img class="mb-4" src="img/palmera.png" alt width="72" alt height="72">
    <h1 class="h3 mb-3 font-weight-normal">Inicio de sesión</h1>
    <label for="txtUsu" class="sr-only">Correo electronico</label>
    <input type="text" name="txtUsu" class="form-control" value="" placeholder="Usuario" required autofocus>
    <label for="txtPass" class="sr-only">Contraseña</label>
    <input type="password" name="txtPass" class="form-control" values="" placeholder="Contraseña" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="cbRemember" id="checkbRemember" value="Recordarme"> Recordarme
        </label>
        <input class="btn btn-lg btn-primary btn-block" name="btnIniciar" type="submit" value="Iniciar Sesión">
    </div>
    <?php include 'Controllers/login.php';?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <button type="button" class="btn btn-secondary">Crear usuario</button>
            </div>
            <div class="col-md-7">
                <button type="button" class="btn btn-secondary">Cambiar clave</button>
            </div>
        </div>
    </div>
    <p class="mt-5 mb-3 text-muted">© 2019 AsTech</p>
    <i class="fa fa-facebook-official"></i>
    <i class="fa fa-instagram" aria-hidden="true"></i>
    <i class="fa fa-whatsapp" aria-hidden="true"></i>
</form>