<?php
if (isset($_POST['btnModificarP'])) {
    $connex = new connection;
    $conn = $connex->getConnection();
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];

    $sql = "INSERT into producto (producto, precio, existencia) values ('$producto', '$precio', '$existencia');";
    $sqlo = "SELECT nombre FROM producto WHERE nombre ='$producto';";
    $resultado = $conn->query($sqlo);
    if ($resultado->num_rows == 1) {
            $connex->printError("El producto ya existe");
        } else if ($resultado->num_rows< 1 && $resultado->num_rows >= 0) {
        $conn->query($sql);
        $connex->printOK("Producto creado correctamente");
    }
}