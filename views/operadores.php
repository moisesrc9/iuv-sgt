<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>SGT - Operadores</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="../css/dashboard.css">



<style>

body{
    background:#f4f6f9;
}

.navbar{
    background:#7a0019;
}

.navbar-brand{
    color:#fff;
    font-weight:bold;
}

.card{
    border:none;
    border-radius:15px;
    box-shadow:0 4px 10px rgba(0,0,0,.1);
}

.btn-sgt{
    background:#7a0019;
    color:white;
}

.btn-sgt:hover{
    background:#990033;
    color:white;
}

.table thead{
    background:#7a0019;
    color:white;
}

</style>

</head>

<body>

<!--
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <span class="navbar-brand">
            Sistema de Gestión del Transporte - Operadores
        </span>

        <div>
            <a href="../tablero.php" class="btn btn-light btn-sm">
                Dashboard
            </a>

            <a href="../logout.php" class="btn btn-danger btn-sm">
                Cerrar sesión
            </a>
        </div>
    </div>
</nav>
-->

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


<div class="container mt-4">

    <div class="card p-4 mb-4">

        <h4 class="mb-4">Alta de Operador</h4>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label>Nombre</label>
                <input type="text" id="nombre" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label>Licencia</label>
                <input type="text" id="licencia" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label>Estatus</label>
                <select id="estatus" class="form-control">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Concesión</label>
                <select id="id_concesion" class="form-control">
                    <option value="">Seleccione...</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Vehículo</label>
                
                <select id="id_vehiculo" class="form-control">
                    <option value="">Primero seleccione una concesión</option>
                </select>
                
            </div>

        </div>

        <button class="btn btn-sgt" onclick="guardarOperador()">
            Guardar Operador
        </button>

    </div>

    <div class="card p-4">

        <h4 class="mb-3">Listado de Operadores</h4>

       <!-- <table class="table table-bordered table-hover"> -->
        <table id="tablaOperadoresData" class="table table-bordered table-hover">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Licencia</th>
                    <th>Concesión</th>
                    <th>Vehículo</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody id="tablaOperadores"></tbody>

        </table>

    </div>

</div>

    </main>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script src="../js/operadores.js"></script>

</body>
</html>