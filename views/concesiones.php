<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<title>Concesiones - SGT</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="../css/dashboard.css">

</head>



<body>

<!--
<div class="container-fluid fixed-top">

    <div class="card">

        <div class="card-header bg-danger text-white">

            <h3>
                <i class="fa-solid fa-gears"></i>
                Gestión de Concesiones
            </h3>

        </div>

    </div>

</div>
-->



<!--
<div class="container-fluid mt-4">

<div class="card">

<div class="card-header bg-danger text-white">

    <h3>
        <i class="fa-solid fa-gears"></i>
        Gestión de Concesiones
    </h3>

</div>
-->


<div class="wrapper">








    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo-area">
            <img src="../assets/logo_artec.png" class="logo">
            <h4>SGT</h4>
        </div>

        <ul class="menu">

            <!--<li class="fa-solid fa-chart-line"><a href="../tablero.php">Tablero</a></li>-->
            
            <li>
                <a href="../tablero.php">
                    <i class="fa-solid fa-chart-line"></i>
                    Tablero
                </a>
            </li>


            <li>
                <a href="../views/vehiculos.php">
                    <i class="fa-solid fa-bus"></i>
                    Vehículos
                </a>
            </li>


            <li>
                <a href="../views/operadores.php">
                    <i class="fa-solid fa-users"></i>
                    Operadores
                </a>
            </li>

            <li>
                <a href="../views/inspecciones.php">
                    <i class="fa-solid fa-clipboard-check"></i>
                    Inspecciones
                </a>
            </li>



            <li class="logout">
                <a href="../logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Cerrar Sesión
                </a>
            </li>

                        

        </ul>

    </aside>
    
    
    
    
    

    <!-- CONTENIDO -->
    <main class="content">


<!--
<div class="container-fluid mt-4">

<div class="card">

<div class="card-header bg-danger text-white">

    <h3>
        <i class="fa-solid fa-gears"></i>
        Gestión de Concesiones
    </h3>

</div>
-->



        <div class="card p-4 mb-4">

            <h2>Alta de Concesiones</h2>

            <form id="formConcesion">

                <div class="mb-3">
                    <label>Número</label>
                    <input type="text" class="form-control" id="numero" name="numero">
                </div>

                <div class="mb-3">
                    <label>Titular</label>
                    <input type="text" class="form-control" id="titular" name="titular">
                </div>

                <div class="mb-3">
                    <label>Vigencia</label>
                    <input type="date" class="form-control" id="vigencia" name="vigencia">
                </div>

                <div class="mb-3">
                    <label>Tipo</label>
                    <select class="form-control" id="tipo" name="tipo">
                        <option>Taxi</option>
                        <option>Urbano</option>
                        <option>Colectivo</option>
                    </select>
                </div>
                

                <div class="mb-3">
                    <label>Estatus</label>
                    <select class="form-control" id="estatus" name="estatus">                            
                        <option value="ACTIVO">ACTIVO</option>
                        <option value="INACTIVO">INACTIVO</option>
                    </select>
                </div>
                

                <button type="submit" class="btn btn-danger">
                    Guardar
                </button>

            </form>
				<!-- MENSAJE -->
				<div id="mensaje" class="mt-3"></div>
        </div>
        
        
        
    <!-- TABLA1 class="table table-hover"   class="table-dark"-->
    
    
    

    <div class="card p-4 mb-4">

        <table id="tablaConcesiones" class="table table-striped table-hover">

            <thead >

                <tr>

                    <th>ID</th>
                    <th>Número</th>
                    <th>Titular</th>
                    <th>Vigencia</th>
                    <th>Estatus</th>
                    <th>Tipo</th>
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
<script src="../js/concesiones.js"></script>


</body>
</html>