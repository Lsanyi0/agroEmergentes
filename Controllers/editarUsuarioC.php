<?php
$conex = new connection;
$conn = $conex->getConnection();
if (isset($_POST['editar'])) {
    $id = $_POST['editar'];
    $sql = "SELECT * FROM usuario WHERE id='$id';";
    $res = $conn->query($sql);
    $result = $res->fetch_row();
} else if (isset($_POST['btnEditarU'])) {
    $id = $_POST['btnEditarU'];

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $salario = $_POST['salario'];
    $contrasena = $_POST['contrasena'];
    $dui = $_POST['dui'];
    $tipo = $_POST['tipo'];

    $sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', contrasena='$contrasena', tipoUsuario='$tipo[0]' WHERE id='$id'";
    $conn->query($sql);
}
