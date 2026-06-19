<?php

session_start();

header('Content-Type: application/json');

require_once("../models/InspectorModel.php");


try
{
    // Validar método
    if($_SERVER['REQUEST_METHOD'] !== 'POST')
    {
        throw new Exception("Método no permitido");
    }

    // Validar sesión
    if(!isset($_SESSION['usuario']))
    {
        throw new Exception("Sesión no válida");
    }

    // Sanitizar acción
    $accion = trim($_POST['accion'] ?? '');

    if(empty($accion))
    {
        throw new Exception("Acción requerida");
    }

    $model = new InspectorModel();

    switch($accion)
    {

        case 'listar':

            $resultado = $model->listar();

            if(!$resultado)
            {
                throw new Exception("Error al consultar inspectores");
            }

            $datos = [];

            while($fila = $resultado->fetch_assoc())
            {
                $datos[] = $fila;
            }

            echo json_encode([
                'status' => 'success',
                'data' => $datos
            ]);

        break;

        default:

            throw new Exception("Acción no válida");

    }

}
catch(Exception $e)
{
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}