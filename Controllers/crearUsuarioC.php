<?php
if (isset($_POST['btnModificar'])) {
    $connex = new connection;
    $conn = $connex->getConnection();
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contrasena = $_POST['contrasena'];
    $tipo = $_POST['tipo'];


    $sql = "INSERT into Usuario (nombre, apellido, usuario, contrasena, tipoUsuario) values ('$nombre', '$apellido', '$usuario', '$contrasena',$tipo[0]);";
    $sqlo = "SELECT tipoUsuario FROM Usuario WHERE usuario ='$usuario';";
    $resultado = $conn->query($sqlo);
    if ($resultado->num_rows == 1) {
            $connex->printError("El nombre de usuario ya existe");
        } else if ($resultado->num_rows< 1 && $resultado->num_rows >= 0) {
        $conn->query($sql);
        $connex->printOK("Usuario creado correctamente");
    }
}
