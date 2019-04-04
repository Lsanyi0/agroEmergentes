<?php
include '../conexion.php';
echo openCon();
GLOBAL $conn;
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$salario=$_POST['salario'];
$contrasena=$_POST['contrasena'];
$dui=$_POST['dui'];
$tipo=$_POST['tipo'];


$sql="Insert into Usuario (nombre, apellido, usuario, contrasena) values ('$nombre', '$apellido', '$usuario', '$contrasena')";
echo $sql;
echo crearUsu($sql);
           
    function usuarios (){
        include '..\conexion.php';
        echo openCon();
        echo usuariosA("Select CONCAT(nombre, '', apellido) as Usuarios from Usuarios;");
    }
?>