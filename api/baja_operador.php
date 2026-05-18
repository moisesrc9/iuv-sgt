<?php

header("Content-Type: application/json");

require_once("../models/Operador.php");

try{

    $id = $_POST['id'];

    $operador = new Operador();

    $resultado = $operador->baja($id);

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