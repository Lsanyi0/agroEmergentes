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
$query=$sql;
$resultado=$conn->query($query);

$dato=($resultado->fetch_assoc());
echo $dato;
}

?>