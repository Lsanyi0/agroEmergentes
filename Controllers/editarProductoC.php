<?php
$conex = new connection;
$conn = $conex->getConnection();
$success = 0;
if (isset($_POST['btnModificarP'])) {
    $id = $_POST['btnModificarP'];
    $nombre = $_POST['producto'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];

    $sql = "UPDATE producto SET nombre='$nombre', precio='$precio', existencia='$existencia' WHERE id='$id'";
    $conn->query($sql);
    $success=1;
}
if (isset($_POST['editarP']) || isset($_POST['btnModificarP'])) {
    if (isset($_POST['editarP'])) $id = $_POST['editarP'];
    if (isset($_POST['btnModificarP'])) $id = $_POST['btnModificarP'];
    $sql = "SELECT * FROM producto WHERE id='$id';";
    $res = $conn->query($sql);
    $result = $res->fetch_row();
} 