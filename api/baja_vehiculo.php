<?php

header("Content-Type: application/json");

require_once("../conexion/conexion.php");

class BajaVehiculo {

    private $conn;

    public function __construct(){

        $db = new Conexion();
        $this->conn = $db->conectar();

    }

    public function eliminar(){

        try{

            $id = (int)$_POST['id'];

            $sql = "
                UPDATE Vehiculo
                SET estatus='Inactivo'
                WHERE id_vehiculo=?
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bind_param("i", $id);

            if(!$stmt->execute()){

                throw new Exception("Error al eliminar");

            }

            echo json_encode([
                "success" => true
            ]);

        }catch(Exception $e){

            echo json_encode([
                "success" => false,
                "message" => $e->getMessage()
            ]);

        }

    }

}

$obj = new BajaVehiculo();
$obj->eliminar();


?>
