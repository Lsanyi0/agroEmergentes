<?php
if (isset($_POST['iniciar'])) {
    include 'conexion.php';
    $connex = new connection;
    $conn = $connex->getConnection();
    $usuario = $_POST['txtUsu'];
    $contrasena = $_POST['txtPass'];

    $sql = "SELECT tipoUsuario, usuario, nombre, apellido from Usuario where contrasena='$contrasena' and usuario='$usuario';";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows == 1) {
        session_start();
        $result = $resultado->fetch_row();
        $_SESSION["infoUsuario"] = $result;
        if ($result[0] == 1) {
                header('Location: Administrador/indexAdmin.php');
            } 
            else {
                header('Location: Usuarios/ventas.php');
            }
    }
    else {
        $connex->printError('Error, usuario o clave incorrectos');
    }
}
