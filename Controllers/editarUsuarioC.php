<?php
$conex = new connection;
$conn = $conex->getConnection();
if (isset($_POST['btnEditarU'])) {
    $id = $_POST['btnEditarU'];
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contrasena = $_POST['contrasena'];
    $tipo = $_POST['tipo'];

    $sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', contrasena='$contrasena', tipoUsuario='$tipo[0]' WHERE id='$id'";
    $conn->query($sql);
    $success=1;
}
if (isset($_POST['editar']) || isset($_POST['btnEditarU'])) {
    if (isset($_POST['editar'])) $id = $_POST['editar'];
    if (isset($_POST['btnEditarU'])) $id = $_POST['btnEditarU'];
    $sql = "SELECT * FROM usuario WHERE id='$id';";
    $res = $conn->query($sql);
    $result = $res->fetch_row();
} 
