<?php

header("Content-Type: application/json");

require_once("../models/Operador.php");

$operador = new Operador();

$result = $operador->listar();

$datos = [];

while($row = $result->fetch_assoc()){

    $datos[] = $row;

}

echo json_encode($datos);

?>