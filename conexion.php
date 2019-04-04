<?php 
$conn=new mysqli("127.0.0.1","root","","LasPalmeras");

function openCon (){
GLOBAL $conn;
if ($conn->connect_error) {
    die("Error de conexion:".$conn->connect_error);
}

print "Conexión exitosa!\n";

}

function closeCon (){
GLOBAL $conn;    
    $conn->close();
}

function Login ($sql){
GLOBAL $conn;
$resultado=$conn->query($sql);

if ($resultado->num_rows > 0) {
    header('Location: ../Usuarios/ventas.php');
}
else{

}

}

    
?>