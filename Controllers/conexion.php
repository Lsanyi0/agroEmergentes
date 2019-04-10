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
            $this->printError('Error al conectar con la base de datos');
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function printError($error)
    {
        echo '<a style="color:red">' . $error . ' <i class="far fa-frown"></i></a>';
    }
    public function printOK($OK)
    {
        echo '<a style="color: rgb(156, 212, 173)">' . $OK . ' <i class="fas fa-thumbs-up"></i></a>';
    }
}
