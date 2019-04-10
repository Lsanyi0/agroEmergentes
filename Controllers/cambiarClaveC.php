<?php
    if(isset($_POST['cambiarClave'])){
        include 'conexion.php';
        $usuario=$_POST['txtUsuario'];
        $contrasena=$_POST['txtClaveA'];
        $contrasenaN=$_POST['txtCalveN'];
        $contrasenaC=$_POST['txtCalveC'];
        
        $conexion = new connection;
        $conn = $conexion->getConnection();

        $sql="Select usuario from Usuario where contrasena='$contrasena' and usuario='$usuario';";
        $resultado=$conn->query($sql);
        if ($resultado->num_rows > 0) {
            if ($contrasenaN == $contrasenaC){
                $sqlo="UPDATE Usuario SET contrasena='$contrasenaN' WHERE usuario = '$usuario';";
                $conn->query($sqlo);
                session_destroy();
                print "Exito, la clave ha sido cambiada";
            }
            else 
            {
                $conexion->printError("La clave nueva no coincide");
            }
        }
        else{
            $conexion->printError("Usuario y clave no validos");
        }
    }