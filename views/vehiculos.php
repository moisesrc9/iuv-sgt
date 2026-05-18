<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Vehículos - SGT</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="../css/dashboard.css">

</head>

<body>

<div class="wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo-area">
            <img src="../assets/logo_artec.png" class="logo">
            <h4>SGT</h4>
        </div>

        <ul class="menu">

            <li>
                <a href="../tablero.php">
                    <i class="fa-solid fa-chart-line"></i>
                    Tablero
                </a>
            </li>

        </ul>

    </aside>

    <!-- CONTENIDO -->
    <main class="content">

        <!-- FORMULARIO -->
        <div class="card p-4 mb-4">

            <h2>Alta de Vehículos</h2>

            <form id="formVehiculo">

                <div class="mb-3">
                    <label>Placa</label>
                    <input type="text" class="form-control" id="placa">
                </div>

                <div class="mb-3">
                    <label>Marca</label>
                    <input type="text" class="form-control" id="marca">
                </div>

                <div class="mb-3">
                    <label>Modelo</label>
                    <input type="text" class="form-control" id="modelo">
                </div>

                <div class="mb-3">
                    <label>Concesión</label>

                    <select class="form-control" id="id_concesion">

                        <option value="">Seleccione</option>

                    </select>

                </div>

                <button type="submit" class="btn btn-danger">
                    Guardar Vehículo
                </button>

            </form>

            <div id="mensaje" class="mt-3"></div>

        </div>

        <!-- TABLA -->
        <div class="card p-4">

            <table id="tablaVehiculos"
            class="table table-striped table-hover">

                <thead>

                    <tr>

                        <th>ID</th>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Estatus</th>
                        <th>Concesión</th>
                        <th>Acciones</th>

                    </tr>

                </thead>

                <tbody></tbody>

            </table>

        </div>

    </main>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/vehiculos.js"></script>

</body>
</html>
