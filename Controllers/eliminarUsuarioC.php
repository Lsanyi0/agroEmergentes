<?php
    if(isset($_POST['borrar']))
    {
        $id = $_POST['borrar'];
        $conex = new connection;
        $conn = $conex->getConnection();
        $sql="DELETE FROM usuario WHERE id='$id';";
        $conn->query($sql);
        $conex->printOK("Usuario borrado correctamente");
    }