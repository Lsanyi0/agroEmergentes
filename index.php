<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/palmera.png" />
    <link rel="stylesheet" type="text/css" media="screen" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/singin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php
        if (isset($_POST['cambiarClave']) || isset($_POST['btCambiarClave'])) {
            include 'cambiarclave.php';
        }
        else 
        {
            include 'login.php';
        }
    ?>
</body>

</html>