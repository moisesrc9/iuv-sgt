<?php


class Conexion {

    private $host = "localhost";
    private $usuario = "root";
    private $password = "kilalermatec";
    private $bd = "bdsgt";

    public function conectar(){

        try {

            $conn = new mysqli(
                $this->host,
                $this->usuario,
                $this->password,
                $this->bd
            );

            if($conn->connect_error){
                throw new Exception("Error de conexión a BD");
            }

            return $conn;

        } catch(Exception $e){

            die($e->getMessage());
        }
    }
}
?>
