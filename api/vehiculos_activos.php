<?php

header("Content-Type: application/json");

require_once("../conexion/conexion.php");

$db = new Conexion();
$conn = $db->conectar();

$id_concesion = isset($_GET['id_concesion'])
    ? (int)$_GET['id_concesion']
    : 0;

$sql = "SELECT 
            id_vehiculo,
            placa,
            marca,
            modelo
        FROM Vehiculo
        WHERE estatus='Activo'
        AND id_concesion=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id_concesion);

$stmt->execute();

$result = $stmt->get_result();

$datos = [];

while($row = $result->fetch_assoc()){

    $datos[] = $row;

}

echo json_encode($datos);



/*
header("Content-Type: application/json");

require_once("../conexion/conexion.php");





$db = new Conexion();
$conn = $db->conectar();

$sql = "SELECT 
            id_vehiculo,
            placa,
            marca,
            modelo
        FROM Vehiculo
        WHERE estatus='Activo'";

$result = $conn->query($sql);

$datos = [];

while($row = $result->fetch_assoc()){

    $datos[] = $row;

}

echo json_encode($datos);
*/ 
?>