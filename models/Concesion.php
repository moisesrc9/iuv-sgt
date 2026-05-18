<?php

require_once(__DIR__ . "/../conexion/conexion.php");

class Concesion {

    private $conn;

    public function __construct() {

        $db = new Conexion();
        $this->conn = $db->conectar();
    }

    /* =========================
       LISTAR
    ========================= */

    public function listar() {

        $sql = "SELECT *
                FROM Concesion
                ORDER BY id_concesion DESC";

        $result = $this->conn->query($sql);

        $datos = [];

        while($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }

        return $datos;
    }

    /* =========================
       INSERTAR
    ========================= */

    public function insertar(
        $numero,
        $titular,
        $vigencia,
        $estatus,
        $tipo
    ) {

        $sql = "INSERT INTO Concesion
                (
                    numero,
                    titular,
                    vigencia,
                    estatus,
                    tipo_concesion
                )
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        if(!$stmt){
            throw new Exception("Error prepare");
        }

        $stmt->bind_param(
            "sssss",
            $numero,
            $titular,
            $vigencia,
            $estatus,
            $tipo
        );

        return $stmt->execute();
    }

    /* =========================
       BAJA LÓGICA
    ========================= */

    public function baja($id) {

        $sql = "UPDATE Concesion
                SET estatus = 'INACTIVO'
                WHERE id_concesion = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}
?>
