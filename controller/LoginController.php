<?php
session_start();
header('Content-Type: application/json');

require_once("../models/Usuario.php");

try {

    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Método no permitido");
    }

    $correo = trim($_POST['correo'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $usuario = new Usuario();

    $respuesta = $usuario->login($correo, $password);

    echo json_encode($respuesta);

} catch(Exception $e){

    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
}
?>
