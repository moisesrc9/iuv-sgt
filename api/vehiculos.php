<?php
header("Content-Type: application/json");

require_once("../conexion/conexion.php");

// Crear instancia
$db = new Database();
$conn = $db->connect();

// Parámetros
$pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$busqueda = isset($_GET['search']) ? $_GET['search'] : '';

$limite = 10;
$offset = ($pagina - 1) * $limite;

// Query
$sql = "SELECT placa, marca, modelo 
        FROM Vehiculo
        WHERE placa LIKE ? 
        OR marca LIKE ? 
        OR modelo LIKE ?
        LIMIT ? OFFSET ?";

$stmt = $conn->prepare($sql);

// Parámetros seguros
$searchParam = "%$busqueda%";

$stmt->bind_param("sssii",
    $searchParam,
    $searchParam,
    $searchParam,
    $limite,
    $offset
);

$stmt->execute();
$result = $stmt->get_result();

$datos = [];

while ($row = $result->fetch_assoc()) {
    $datos[] = $row;
}

// Total registros
$totalSql = "SELECT COUNT(*) as total 
             FROM Vehiculo
             WHERE placa LIKE ? 
             OR marca LIKE ? 
             OR modelo LIKE ?";

$totalStmt = $conn->prepare($totalSql);
$totalStmt->bind_param("sss", $searchParam, $searchParam, $searchParam);
$totalStmt->execute();

$totalResult = $totalStmt->get_result();
$total = $totalResult->fetch_assoc()['total'];

echo json_encode([
    "data" => $datos,
    "total" => $total
]);