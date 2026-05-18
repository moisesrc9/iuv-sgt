<?php

header("Content-Type: application/json");

require_once("../models/Concesion.php");

try {

    $numero = trim($_POST['numero']);
    $titular = strtoupper(trim($_POST['titular']));
    $vigencia = $_POST['vigencia'];
    $tipo = strtoupper(trim($_POST['tipo']));
    $estatus = $_POST['estatus'];
    

    $concesion = new Concesion();

    $resultado = $concesion->insertar(
        $numero,
        $titular,
        $vigencia,        
        $estatus,
        $tipo      
    );

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