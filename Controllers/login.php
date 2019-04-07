<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'conexion.php';
        $conn = new connection;
        $usuario=$_POST['txtUsu'];
        $contrasena=$_POST['txtPass'];

        $sql="SELECT usuario from Usuario where contrasena='$contrasena' and usuario='$usuario';";
        $conn->Login($sql);
    }
?>