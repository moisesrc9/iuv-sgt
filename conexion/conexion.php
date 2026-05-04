<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "kilalermatec";
    private $database = "bdsgt";

    public function connect() {
        $conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->database
        );

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        return $conn;
    }
}

?>
