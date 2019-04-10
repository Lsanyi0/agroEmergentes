<?php
    $conex = new connection;
    $conn = $conex->getConnection();
    $sql = "SELECT * FROM producto;";
    $productos = $conn->query($sql);
    while ($row = $productos->fetch_assoc()) 
    {
        echo "<tr>";
        echo "<th scope='row'>" .$row["id"]. "</th>";
        echo "<td scope='row'>" .$row["nombre"]. "</td>";
        echo "<td scope='row'>" .$row["precio"]. "</td>";
        echo "<td scope='row'>" .$row["existencia"]. "</td>";
        echo "<td scope='row'>";
        echo "<button type='submit' class='btn btn-info col-md-auto' name='editarP' value='".$row["id"]."'>Editar</button>";
        echo "</td>";
        echo "</tr>";
    }