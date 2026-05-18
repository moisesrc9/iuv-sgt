<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SGT - Tablero Principal</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<link rel="stylesheet" href="css/dashboard.css">

<style>

/* ==========================
   RESET
========================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

/* ==========================
   BODY
========================== */

body{
    min-height:100vh;
    background:
        linear-gradient(rgba(80,0,20,0.80), rgba(80,0,20,0.80)),
        url('assets/fondo_campeche.jpg');

    background-size:cover;
    background-position:center;
    background-attachment:fixed;

    font-family:'Segoe UI', sans-serif;
}

/* ==========================
   LAYOUT
========================== */

.wrapper{
    display:flex;
    min-height:100vh;
}

/* ==========================
   SIDEBAR
========================== */

.sidebar{

    width:260px;
    background:rgba(90,0,20,0.95);

    backdrop-filter:blur(8px);

    position:fixed;

    height:100%;

    padding-top:20px;

    box-shadow:4px 0 15px rgba(0,0,0,0.3);

    z-index:1000;
}

/* LOGO */

.logo-area{
    text-align:center;
    margin-bottom:30px;
}

.logo{
    width:100px;
    margin-bottom:10px;
}

.logo-area h4{
    color:white;
    font-weight:bold;
}

/* MENU */

.menu{
    list-style:none;
    padding:0;
}

.menu li{
    margin:5px 0;
}

.menu a{

    display:block;

    padding:15px 20px;

    color:white;

    text-decoration:none;

    transition:0.3s;

    font-size:16px;
}

.menu a:hover{

    background:#b91c1c;

    padding-left:30px;
}

.logout{
    margin-top:40px;
}

/* ==========================
   CONTENT
========================== */

.content{

    margin-left:260px;

    width:100%;

    padding:25px;
}

/* ==========================
   NAVBAR
========================== */

.topbar{

    background:rgba(255,255,255,0.12);

    backdrop-filter:blur(8px);

    padding:18px 25px;

    border-radius:18px;

    margin-bottom:25px;

    display:flex;

    justify-content:space-between;

    align-items:center;

    color:white;

    box-shadow:0 4px 20px rgba(0,0,0,0.2);
}

.topbar h2{
    font-size:24px;
    margin:0;
}

.btn-salir{

    background:white;

    color:#7b002c;

    border:none;

    padding:10px 18px;

    border-radius:12px;

    font-weight:bold;

    transition:0.3s;
}

.btn-salir:hover{
    background:#f3d5dd;
    transform:scale(1.05);
}

/* ==========================
   TARJETAS KPI
========================== */

.card-dashboard{

    background:rgba(255,255,255,0.96);

    border-radius:20px;

    padding:20px;

    box-shadow:0 8px 25px rgba(0,0,0,0.25);

    color:#333;

    transition:0.3s;
}

.card-dashboard:hover{
    transform:translateY(-5px);
}

.kpi-icon{
    font-size:40px;
    color:#9d174d;
}

.kpi-numero{
    font-size:34px;
    font-weight:bold;
    color:#7b002c;
}

/* ==========================
   TABLAS
========================== */

.table{
    border-radius:12px;
    overflow:hidden;
}

.table thead{
    background:#7b002c;
    color:white;
}

.table-hover tbody tr:hover{
    background:#f9d8df;
}

/* ==========================
   INPUT
========================== */

.form-control{

    border-radius:12px;

    padding:12px;

    border:1px solid #ddd;
}

/* ==========================
   PAGINACIÓN
========================== */

#paginacion button{
    border-radius:10px;
}

/* ==========================
   GRÁFICA
========================== */

canvas{
    max-height:400px;
}

/* ==========================
   FOOTER
========================== */

.footer{

    text-align:center;

    color:white;

    margin-top:20px;

    font-size:14px;
}

/* ==========================
   RESPONSIVE
========================== */

@media(max-width:900px){

    .sidebar{
        width:100%;
        height:auto;
        position:relative;
    }

    .content{
        margin-left:0;
    }

    .wrapper{
        flex-direction:column;
    }
}

</style>

</head>

<body>

<div class="wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo-area">

            <img src="assets/logo_artec.png" class="logo">

            <h4>SGT</h4>

        </div>

        <ul class="menu">

            <li>
                <a href="tablero.php">
                    <i class="fa-solid fa-chart-line"></i>
                    Tablero
                </a>
            </li>

            <li>
                <a href="views/concesiones.php">
                    <i class="fa-solid fa-id-card"></i>
                    Concesiones
                </a>
            </li>

            <li>
                <a href="views/vehiculos.php">
                    <i class="fa-solid fa-bus"></i>
                    Vehículos
                </a>
            </li>

            <li>
                <a href="views/operadores.php">
                    <i class="fa-solid fa-users"></i>
                    Operadores
                </a>
            </li>

            <li>
                <a href="views/inspecciones.php">
                    <i class="fa-solid fa-clipboard-check"></i>
                    Inspecciones
                </a>
            </li>

            <li>
                <a href="views/infracciones.php">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Infracciones
                </a>
            </li>

            <li>
                <a href="views/documentos.php">
                    <i class="fa-solid fa-folder"></i>
                    Documentos
                </a>
            </li>

            <li class="logout">
                <a href="logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Cerrar Sesión
                </a>
            </li>

        </ul>

    </aside>

    <!-- CONTENIDO -->
    <main class="content">

        <!-- TOPBAR -->

        <div class="topbar">

            <h2>
                Sistema de Gestión del Transporte Público del Estado de Campeche
            </h2>

        </div>

        <!-- KPIs -->

        <div class="row g-4 mb-4">

            <div class="col-md-3">

                <div class="card-dashboard text-center">

                    <i class="fa-solid fa-bus kpi-icon"></i>

                    <h5 class="mt-3">Vehículos</h5>

                    <div class="kpi-numero" id="totalVehiculos">0</div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card-dashboard text-center">

                    <i class="fa-solid fa-id-card kpi-icon"></i>

                    <h5 class="mt-3">Concesiones</h5>

                    <div class="kpi-numero" id="concesiones">0</div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card-dashboard text-center">

                    <i class="fa-solid fa-users kpi-icon"></i>

                    <h5 class="mt-3">Conductores</h5>

                    <div class="kpi-numero" id="conductores">0</div>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card-dashboard text-center">

                    <i class="fa-solid fa-clipboard-check kpi-icon"></i>

                    <h5 class="mt-3">Inspecciones</h5>

                    <div class="kpi-numero" id="inspecciones">0</div>

                </div>

            </div>

        </div>

        <!-- BUSCADOR -->

        <div class="card-dashboard mb-4">

            <input type="text"
                   id="buscador"
                   class="form-control"
                   placeholder="Buscar vehículo por placa, marca o modelo...">

        </div>

        <!-- TABLA -->

        <div class="card-dashboard mb-4">

            <h4 class="mb-3 text-center">

                <i class="fa-solid fa-table"></i>

                Vehículos Registrados

            </h4>

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead>

                        <tr>
                            <th>Placa</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                        </tr>

                    </thead>

                    <tbody id="tablaVehiculos"></tbody>

                </table>

            </div>

            <div id="paginacion" class="mt-4 text-center"></div>

        </div>

        <!-- GRÁFICA -->

        <div class="card-dashboard">

            <h4 class="text-center mb-4">

                <i class="fa-solid fa-chart-column"></i>

                Vehículos por Marca

            </h4>

            <canvas id="grafica"></canvas>

        </div>

        <!-- FOOTER -->

        <div class="footer mt-4">

            © MIDS(V) - Maestría en Ingeniería y Desarrollo de Software 2026
            <br>
            Moisés I. Rebolledo Canul

        </div>

    </main>

</div>

<script>

let paginaActual = 1;
let busquedaActual = "";
const limite = 10;
let chart = null;

/* ===========================================
   VEHÍCULOS
=========================================== */

function cargarDatos(pagina = 1, busqueda = "") {

    fetch(`http://localhost:8000/api/vehiculos.php?page=${pagina}&search=${busqueda}`)

    .then(res => res.json())

    .then(res => {

        let tabla = document.getElementById('tablaVehiculos');

        tabla.innerHTML = '';

        let marcas = {};

        res.data.forEach(v => {

            tabla.innerHTML += `
                <tr>
                    <td>${v.placa}</td>
                    <td>${v.marca}</td>
                    <td>${v.modelo}</td>
                </tr>
            `;

            marcas[v.marca] = (marcas[v.marca] || 0) + 1;

        });

        document.getElementById('totalVehiculos').innerText = res.total;

        /* PAGINACIÓN */

        let totalPaginas = Math.ceil(res.total / limite);

        let paginacion = document.getElementById('paginacion');

        paginacion.innerHTML = '';

        for(let i = 1; i <= totalPaginas; i++){

            paginacion.innerHTML += `
                <button class="btn btn-sm
                ${i === pagina ? 'btn-danger' : 'btn-outline-danger'}
                m-1"
                onclick="cambiarPagina(${i})">
                    ${i}
                </button>
            `;
        }

        /* GRÁFICA */

        if(chart){
            chart.destroy();
        }

        chart = new Chart(document.getElementById('grafica'), {

            type:'bar',

            data:{

                labels:Object.keys(marcas),

                datasets:[{
                    label:'Vehículos',
                    data:Object.values(marcas),
                    borderWidth:1
                }]
            }
        });

    })

    .catch(error => {
        console.error(error);
    });
}

/* ===========================================
   KPIs
=========================================== */

function cargarKPI(){

    fetch('http://localhost:8000/api/api_dashboard.php')

    .then(res => res.json())

    .then(data => {

        document.getElementById('conductores').textContent = data.vehiculos;

        document.getElementById('concesiones').textContent = data.concesiones;

        document.getElementById('inspecciones').textContent = data.inspecciones;

    });
}

/* ===========================================
   PAGINACIÓN
=========================================== */

function cambiarPagina(pagina){

    cargarDatos(pagina, busquedaActual);

}

/* ===========================================
   BUSCADOR
=========================================== */

document.getElementById('buscador')

.addEventListener('keyup', function(){

    busquedaActual = this.value;

    cargarDatos(1, busquedaActual);

});

/* ===========================================
   INIT
=========================================== */

cargarDatos();

cargarKPI();

</script>

</body>

</html>