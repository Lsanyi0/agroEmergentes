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
        echo "</tr>";
    }