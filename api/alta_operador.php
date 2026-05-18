<?php

header("Content-Type: application/json");

require_once("../models/Operador.php");

try{

    $nombre = $_POST['nombre'];
    $licencia = $_POST['licencia'];
    $estatus = $_POST['estatus'];
    $id_concesion = $_POST['id_concesion'];
    $id_vehiculo = $_POST['id_vehiculo'];

    $operador = new Operador();

    $resultado = $operador->guardar(
        $nombre,
        $licencia,
        $estatus,
        $id_concesion,
        $id_vehiculo
    );

    echo json_encode([
        "success"=>$resultado
    ]);

}catch(Exception $e){

    echo json_encode([
        "success"=>false,
        "mensaje"=>$e->getMessage()
    ]);

}
?>