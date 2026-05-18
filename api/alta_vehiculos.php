<?php

header("Content-Type: application/json");

require_once("../conexion/conexion.php");

class AltaVehiculo {

    private $conn;

    public function __construct(){

        $db = new Conexion();
        $this->conn = $db->conectar();

    }

    public function guardar(){

        try{

            $data = json_decode(file_get_contents("php://input"), true);

            if(
                empty($data['placa']) ||
                empty($data['marca']) ||
                empty($data['modelo']) ||
                empty($data['id_concesion'])
            ){

                throw new Exception("Todos los campos son obligatorios");

            }

            $placa = trim($data['placa']);
            $marca = trim($data['marca']);
            $modelo = trim($data['modelo']);
            $id_concesion = (int)$data['id_concesion'];

            $estatus = "Activo";

            // VALIDAR DUPLICADO
            $validar = $this->conn->prepare("
                SELECT id_vehiculo
                FROM Vehiculo
                WHERE placa = ?
            ");

            $validar->bind_param("s", $placa);

            $validar->execute();

            $resultado = $validar->get_result();

            if($resultado->num_rows > 0){

                throw new Exception("La placa ya existe");

            }

            // INSERT
            $sql = "
                INSERT INTO Vehiculo
                (
                    placa,
                    marca,
                    modelo,
                    estatus,
                    id_concesion
                )
                VALUES
                (
                    ?, ?, ?, ?, ?
                )
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bind_param(
                "ssssi",
                $placa,
                $marca,
                $modelo,
                $estatus,
                $id_concesion
            );

            if(!$stmt->execute()){

                throw new Exception("Error al guardar");

            }

            echo json_encode([
                "success" => true,
                "message" => "Vehículo guardado correctamente"
            ]);

        }catch(Exception $e){

            echo json_encode([
                "success" => false,
                "message" => $e->getMessage()
            ]);

        }

    }

}

$vehiculo = new AltaVehiculo();
$vehiculo->guardar();


?>