<?php

header("Content-Type: application/json");

require_once("../conexion/conexion.php");

$db = new Conexion();
$conn = $db->conectar();

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

$result = $conn->query($sql);

$datos = [];

while($row = $result->fetch_assoc()){

    $datos[] = $row;

}

echo json_encode([
    "data" => $datos
]);

?>