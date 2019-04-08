<?php
include '../Controllers/conexion.php';
$connex = new connection;
$conn = $connex->getConnection();
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$salario=$_POST['salario'];
$contrasena=$_POST['contrasena'];
$dui=$_POST['dui'];
$tipo=$_POST['tipo'];


$sql="INSERT into Usuario (nombre, apellido, usuario, contrasena, tipoUsuario) values ('$nombre', '$apellido', '$usuario', '$contrasena',$tipo[0])";
$sqlo="SELECT usuario FROM Usuario WHERE usuario ='$usuario';";
$resultado = $conn->query($sqlo);
print_r($tipo);
/* if ($resultado >= 1)
{
    $connex->printError("El nombre de usuario ya existe");
}
else if ($resultado < 1 && $resultado > 0){
    $conn->query($sql);
} */
?>