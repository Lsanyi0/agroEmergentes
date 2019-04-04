<?php 
$conn=new mysqli("127.0.0.1","root","resident00RE","agroe");
GLOBAL $usuario;
$usuarioA = $usuario;
function openCon (){
GLOBAL $conn;
if ($conn->connect_error) {
    die("Error de conexion:".$conn->connect_error);
}

#print "Conexión exitosa!\n";


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
    header('Location: ../Login/login.php');
}

}

function getConn(){
    GLOBAL $conn;
    if ($conn->connect_error) {
        die("Error de conexion:".$conn->connect_error);
    }
    else{
        return $conn;
    }
function usuariosA ($sql){
GLOBAL $conn;
$usuarios;
$n=0;
$resultado=$conn->query($sql);
while($datos = $resultado->fetch_assoc())
{
    $usuarios[$n]=$datos['Usuarios'];
    $n++;
    echo $usuarios[$n];
}
}

function crearUsu (){
    GLOBAL $conn;
    $resultado=$conn->query($sql);
    
    if($result){
           
        print "funco";
        header('Location: ./indexAdmin.php');
       }
       else{
           print "no funco";
       }

}
?>