<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

require_once("../conexion/conexion.php");

class Usuario {

    private $conexion;

    public function __construct() {

        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function login($correo, $password) {

        try {

            if(empty($correo) || empty($password)) {
                throw new Exception("Todos los campos son obligatorios");
            }

            // Prepared Statement -> Prevención SQL Injection
            $sql = "SELECT id_usuario, nombre, correo
                    FROM Usuario
                    WHERE correo = ?
                    AND password = ?";

            $stmt = $this->conexion->prepare($sql);

            if(!$stmt){
                throw new Exception("Error al preparar consulta");
            }

            $stmt->bind_param("ss", $correo, $password);
            $stmt->execute();

            $resultado = $stmt->get_result();

            if($resultado->num_rows > 0){

                $usuario = $resultado->fetch_assoc();

                $_SESSION['usuario'] = $usuario['nombre'];
                $_SESSION['id_usuario'] = $usuario['id_usuario'];

                return [
                    "status" => "success",
                    "message" => "Bienvenido al sistema SGT"
                ];

            } else {

                throw new Exception("Usuario o contraseña incorrectos");
            }

        } catch(Exception $e){

            return [
                "status" => "error",
                "message" => $e->getMessage()
            ];
        }
    }
}
?>