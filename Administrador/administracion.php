<?php
    function usuarios (){
        include '..\conexion.php';
        echo openCon();
        echo usuariosA("Select CONCAT(nombre, '', apellido) as Usuarios from Usuarios;");
    }
?>