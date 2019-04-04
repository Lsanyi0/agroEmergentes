<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Las palmeras</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/singin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- <script>
   
function login(usuario, contrasena){
    var parametros = {
        "usuario" : usuario,
        "contrasena" : contrasena,
        "login" : funcion
    };
    $.ajax({
        url:"conexion.php",
        method:"POST",
        async:false,
        data:parametros,
        dataType:"json",
        success:function(response){

        }

    });
}
</script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="login.js"></script> -->
<form class="form-signin" action="login.php" id="login" method="POST">
        <img class="mb-4" src="../img/palmera.png" alt width="72" alt height="72">
        <h1 class="h3 mb-3 font-weight-normal">Inicio de sesión</h1>
        <label for="txtUsu" class="sr-only">Correo electronico</label>
        <input type="text" name="txtUsu" class="form-control" value="" placeholder="Correo Electronico" required autofocus>
        <label for="txtPass" class="sr-only">Contraseña</label>
        <input type="password" name="txtPass" class="form-control" values="" placeholder="Contraseña" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="cbRemember" id="checkbRemember" value="Recordarme"> Recordarme
            </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" name="btnIniciar" type="submit" value="Iniciar Sesión">
        <p class="mt-5 mb-3 text-muted">© 2019 AsTech</p>
        <i class="fa fa-facebook-official"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </form>
</body>

</html>