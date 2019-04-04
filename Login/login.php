<?php
include '..\conexion.php';
echo openCon();
$usuario=$_POST['txtUsu'];
$contrasena=$_POST['txtPass'];
/*
var_dump($_POST);
*/

$sql="Select usuario from Usuario where contrasena='$contrasena' and usuario='$usuario';";
    /*$sql ="Select Login(".$usuario.", ".$contrasena.");";
    $sentencia=$conn->stmt_init();
    if (!$sentencia->prepare($query)) {
        print "Fallo consulta\n";
    }
    else {
        $sentencia->execute();
        $resultado=$sentencia->get_result();
        print $resultado;
    }
 */
echo Login($sql);

        
?>