<?php 
$conn = mysqli_connect("127.0.0.1", "root", "", "LasPalmeras");
function openCon (){
if ($conn->connect_error)
    die($conn->connect_error);

print "Conexión exitosa!\n";

exit(1);
}
function closeCon (){
    mysqli_close($conn);
}
function Login (){
openCon();
$usuario=$_GET["usuario"];
$contrasena=$_GET["contrasena"];
    $sql ="Select Login();";
    $q = $conn->query($sql);
    $q->setFetchMode

}

?>