<?php

header("Content-Type: application/json");

require_once("../models/Concesion.php");

try {

    $id = $_POST['id'];

    $concesion = new Concesion();

    $resultado = $concesion->baja($id);

    echo json_encode([
        "success" => $resultado
    ]);

} catch(Exception $e){

    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
?>