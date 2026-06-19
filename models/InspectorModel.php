<?php

require_once("../conexion/Conexion.php");

class InspectorModel
{
    private $conn;

    public function __construct()
    {
        $db = new Conexion();
        $this->conn = $db->conectar();
    }

    public function listar()
    {
        $sql = "
			SELECT
                id_usuario,
                nombre
            FROM usuario
            WHERE id_rol = 3
            ORDER BY nombre
            ";

        return $this->conn->query($sql);
    }
}