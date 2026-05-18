<?php

require_once("../conexion/conexion.php");

class Operador {

    private $conn;

    public function __construct(){

        $db = new Conexion();
        $this->conn = $db->conectar();

    }

    public function listar(){

        $sql = "SELECT 
                    o.id_operador,
                    o.nombre,
                    o.licencia,
                    o.estatus,
                    c.numero,
                    v.placa
                FROM Operador o
                INNER JOIN Concesion c
                    ON o.id_concesion = c.id_concesion
                INNER JOIN Vehiculo v
                    ON o.id_vehiculo = v.id_vehiculo";

        return $this->conn->query($sql);

    }

    public function guardar($nombre,$licencia,$estatus,$id_concesion,$id_vehiculo){

        $sql = "INSERT INTO Operador
                (nombre, licencia, estatus, id_concesion, id_vehiculo)
                VALUES (?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "sssii",
            $nombre,
            $licencia,
            $estatus,
            $id_concesion,
            $id_vehiculo
        );

        return $stmt->execute();

    }

    public function baja($id){

        $sql = "UPDATE Operador
                SET estatus='Inactivo'
                WHERE id_operador=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i",$id);

        return $stmt->execute();

    }

}
?>