<?php
    $conex = new connection;
    $conn = $conex->getConnection();
    $sql = "SELECT * FROM producto;";
    $productos = $conn->query($sql);
    $it=0;
    while ($row = $productos->fetch_assoc()) 
    {        
        echo "<tr>";
        echo "<th scope='row'>" .$row["id"]. "</th>";
        echo "<td scope='row'>" .$row["nombre"]. "</td>";
        echo "<td scope='row'>";
        echo '<input type="text" name="cant'.$it.'" class="form-control producto" value="0">';
        echo "</td>";
        echo "</tr>";
    }