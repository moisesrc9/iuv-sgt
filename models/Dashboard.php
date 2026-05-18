<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');


require_once("conexion/conexion.php");

class Dashboard {

    private $conn;

    public function __construct() {
        $db = new Conexion();
        $this->conn = $db->conectar();
    }

    // Total operadores
    public function getTotalOperadores() {
        $sql = "SELECT COUNT(*) as total FROM Operador";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc()['total'];
    }

    // Total concesiones
    public function getTotalConcesiones() {
        $sql = "SELECT COUNT(*) as total FROM Concesion";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc()['total'];
    }

    // Total inspecciones
    public function getTotalInspecciones() {
        $sql = "SELECT COUNT(*) as total FROM Inspeccion";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc()['total'];
    }

    // Vehículos por marca
    public function getVehiculosPorMarca() {
        $sql = "SELECT marca, COUNT(*) as total FROM Vehiculo GROUP BY marca";

        $result = $this->conn->query($sql);

        $marcas = [];
        $totales = [];

        while($row = $result->fetch_assoc()){
            $marcas[] = $row['marca'];
            $totales[] = $row['total'];
        }

        return [
            "marcas" => $marcas,
            "totales" => $totales
        ];
    }
}
?>
