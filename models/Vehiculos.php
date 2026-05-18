<?php

require_once("../conexion/conexion.php");

class Vehiculos {

    private $conn;

    public function __construct(){

        $db = new Conexion();
        $this->conn = $db->conectar();

    }

    // LISTAR VEHÍCULOS
    public function listar(){

        $sql = "
            SELECT 
                v.id_vehiculo,
                v.placa,
                v.marca,
                v.modelo,
                v.estatus,
                c.numero
            FROM Vehiculo v
            INNER JOIN Concesion c
                ON v.id_concesion = c.id_concesion
        ";

        return $this->conn->query($sql);

    }

    // LISTAR CONCESIONES ACTIVAS
    public function concesionesActivas(){

        $sql = "
            SELECT 
                id_concesion,
                numero,
                tipo_concesion,
                titular
            FROM Concesion
            WHERE estatus='Activo'
        ";

        return $this->conn->query($sql);

    }

}
?>