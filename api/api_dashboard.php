<?php
$conn = new mysqli("localhost", "root", "kilalermatec", "bdsgt");

// Total conductores
$vehiculos = $conn->query("SELECT COUNT(*) as total FROM Operador")->fetch_assoc();

// Total concesiones
$concesiones = $conn->query("SELECT COUNT(*) as total FROM Concesion")->fetch_assoc();

// Total inspecciones
$inspecciones = $conn->query("SELECT COUNT(*) as total FROM Inspeccion")->fetch_assoc();

// Vehículos por marca
$marcasQuery = $conn->query("SELECT marca, COUNT(*) as total FROM Vehiculo GROUP BY marca");

$marcas = [];
$totales = [];

while($row = $marcasQuery->fetch_assoc()){
    $marcas[] = $row['marca'];
    $totales[] = $row['total'];
}

echo json_encode([
    "vehiculos" => $vehiculos['total'],
    "concesiones" => $concesiones['total'],
    "inspecciones" => $inspecciones['total'],
    "marcas" => $marcas,
    "totales" => $totales
]);
?>