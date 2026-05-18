<?php

header("Content-Type: application/json");

require_once("../conexion/conexion.php");

$db = new Conexion();
$conn = $db->conectar();

$sql = "SELECT 
            id_concesion,
            numero,
            tipo_concesion,
            titular
        FROM Concesion
        WHERE estatus='Activo'";

$result = $conn->query($sql);

$datos = [];

while($row = $result->fetch_assoc()){

    $datos[] = $row;

}

echo json_encode($datos);

?>