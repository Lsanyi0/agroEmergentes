<?php
    include "conexion.php";
    $conex = new connection;
    $conn = $conex->getConnection();
    $sql = "SELECT id, nombre, apellido, usuario, tipoUsuario FROM usuario;";
    $usuarios = $conn->query($sql);
    while ($row = $usuarios->fetch_assoc()) 
    { 
       echo "<th>";
       echo "<th scope='row'>" .$row["id"]. "</th>";
       echo "<td scope='row'>" .$row["nombre"]. "</td>";
       echo "<td scope='row'>" .$row["apellido"]. "</td>";
       echo "<td scope='row'>" .$row["usuario"]. "</td>";
       echo "<td scope='row'>" .$row["tipoUsuario"]. "</td>";
       echo "<td scope='row'>" ."NADA". "</td>";
       echo "</th>";
    } 
?>
