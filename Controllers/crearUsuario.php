<?php
if (isset($_POST['btnModificar'])) {
    include './Controllers/conexion.php';
    $connex = new connection;
    $conn = $connex->getConnection();
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $salario = $_POST['salario'];
    $contrasena = $_POST['contrasena'];
    $dui = $_POST['dui'];
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
