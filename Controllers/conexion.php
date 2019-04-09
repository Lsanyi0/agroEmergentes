<?php
class connection
{
    private $user;
    private $host;
    private $pass;
    private $db;
    public $conn;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "resident00RE";
        $this->db = "agroe";
        $this->connect();
    }
    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            exit('Error al conectar con la base de datos');
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function usuariosA($sql)
    {
        // $usuarios;
        $n = 0;
        $resultado = $this->conn->query($sql);
        while ($datos = $resultado->fetch_assoc()) {
            $usuarios[$n] = $datos['Usuarios'];
            $n++;
            echo $usuarios[$n];
        }
    }

    public function crearUsu($sql)
    {
        $resultado = $this->conn->query($sql);

        if ($resultado) {

            print "funco";
            header('Location: ./indexAdmin.php');
        } else {
            $this->printError("no funco");
        }
    }

    public function printError($error)
    {
        echo '<a style="color:red">' . $error . ' <i class="far fa-frown"></i></a>';
    }
}
