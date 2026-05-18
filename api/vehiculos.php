<?php
header("Content-Type: application/json");

require_once("../conexion/conexion.php");

try {

    // Conexión
    $db = new Conexion();
    $conn = $db->conectar();

    // Página
    $pagina = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Validar página
    if ($pagina <= 0) {
        $pagina = 1;
    }

    // Búsqueda
    $busqueda = isset($_GET['search']) ? trim($_GET['search']) : '';

    // Paginación
    $limite = 10;
    $offset = max(0, ($pagina - 1) * $limite);

    // Query segura
    $sql = "SELECT placa, marca, modelo
            FROM Vehiculo
            WHERE placa LIKE ?
               OR marca LIKE ?
               OR modelo LIKE ?
            LIMIT ? OFFSET ?";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error al preparar query");
    }

    $searchParam = "%$busqueda%";

    $stmt->bind_param(
        "sssii",
        $searchParam,
        $searchParam,
        $searchParam,
        $limite,
        $offset
    );

    $stmt->execute();

    $result = $stmt->get_result();

    $datos = [];

    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }

    // TOTAL
    $totalSql = "SELECT COUNT(*) as total
                 FROM Vehiculo
                 WHERE placa LIKE ?
                    OR marca LIKE ?
                    OR modelo LIKE ?";

    $totalStmt = $conn->prepare($totalSql);

    $totalStmt->bind_param(
        "sss",
        $searchParam,
        $searchParam,
        $searchParam
    );

    $totalStmt->execute();

    $totalResult = $totalStmt->get_result();

    $total = $totalResult->fetch_assoc()['total'];

    echo json_encode([
        "success" => true,
        "data" => $datos,
        "total" => $total
    ]);

} catch (Exception $e) {

    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);

}
?>