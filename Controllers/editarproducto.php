<?php
$conex = new connection;
$conn = $conex->getConnection();
if (isset($_POST['btnEditarP'])) {
    $id = $_POST['btnEditarP'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];

    $sql = "UPDATE producto SET nombre='$nombre', precio='$precio', existencia='$existencia' WHERE id='$id'";
    $conn->query($sql);
    $success=1;
}
if (isset($_POST['editarP']) || isset($_POST['btnEditarU'])) {
    if (isset($_POST['editar'])) $id = $_POST['editar'];
    if (isset($_POST['btnEditarU'])) $id = $_POST['btnEditarU'];
    $sql = "SELECT * FROM usuario WHERE id='$id';";
    $res = $conn->query($sql);
    $result = $res->fetch_row();
} 