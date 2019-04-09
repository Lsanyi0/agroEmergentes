<?php
    $conex = new connection;
    $conn = $conex->getConnection();
    $sql = "SELECT id, nombre, apellido, usuario, tipoUsuario FROM usuario;";
    $usuarios = $conn->query($sql);
    $tipoUsuario;
    while ($row = $usuarios->fetch_assoc()) 
    {       
        if ($row["tipoUsuario"]==1) $tipoUsuario = "Privilegiado";
        else $tipoUsuario = "Normal";
        echo "<tr>";
        echo "<th scope='row'>" .$row["id"]. "</th>";
        echo "<td scope='row'>" .$row["nombre"]. "</td>";
        echo "<td scope='row'>" .$row["apellido"]. "</td>";
        echo "<td scope='row'>" .$row["usuario"]. "</td>";
        echo "<td scope='row'>" .$tipoUsuario. "</td>";
        echo "<td scope='row'>";
        echo "<button type='submit' class='btn btn-danger col-md-auto' name='borrar' value='".$row["id"]."'>Borrar</button>";
        echo "<button type='submit' class='btn btn-info col-md-auto' name='editar' value='".$row["id"]."'>Editar</button>";
        echo "</td>";
        echo "</tr>";
    }
