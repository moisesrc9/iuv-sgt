<?php

header("Content-Type: application/json");

require_once("../models/Concesion.php");

try {

    $concesion = new Concesion();

    echo json_encode($concesion->listar());

} catch(Exception $e){

    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
?>