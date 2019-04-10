<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/palmera.png" />
    <link rel="stylesheet" type="text/css" media="screen" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/singin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <?php
    if (isset($_POST['cambiarClave']) || isset($_POST['btCambiarClave'])) {
        include 'cambiarclave.php';
    } else {
            include 'login.php';
        }
    ?>
    <p class="mt-5 mb-3 text-muted">© 2019 AsTech <i class="fab fa-php" aria-hidden="true"></i></p>
    <i class="fab fa-linux"></i>
    <i class="fab fa-windows"></i>
    <i class="fab fa-apple" aria-hidden="true"></i>

    </form>
    </body>

</html>