<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>SGT | Módulo en Construcción</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

body{
    background:#f4f6f9;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Segoe UI, sans-serif;
}

.card-construccion{
    max-width:700px;
    width:100%;
    border:none;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.header-card{
    background:#c62828;
    color:#fff;
    text-align:center;
    padding:25px;
}

.logo-icon{
    font-size:70px;
    margin-bottom:15px;
}

.body-card{
    padding:40px;
    text-align:center;
}

.body-card h2{
    font-weight:700;
    color:#333;
}

.body-card p{
    color:#666;
    font-size:18px;
}

.btn-regresar{
    background:#c62828;
    color:white;
    border:none;
}

.btn-regresar:hover{
    background:#a61d1d;
    color:white;
}

.footer-card{
    background:#fafafa;
    text-align:center;
    padding:15px;
    color:#777;
    font-size:14px;
}

</style>

</head>

<body>

<div class="card card-construccion">

    <div class="header-card">

        <i class="fa-solid fa-bus logo-icon"></i>

        <h3>
            Sistema de Gestión del Transporte
        </h3>

    </div>

    <div class="body-card">

        <i class="fa-solid fa-screwdriver-wrench text-danger"
           style="font-size:80px;"></i>

        <h2 class="mt-4">
            Módulo en Construcción
        </h2>

        <p class="mt-3">

            El recurso que intenta consultar aún no se encuentra
            disponible o está siendo desarrollado.

        </p>

        <p>

            Favor de intentar nuevamente más tarde.

        </p>

        <div class="mt-4">

            <a href="../tablero.php"
               class="btn btn-regresar btn-lg">

                <i class="fa-solid fa-house"></i>
                Regresar al Tablero

            </a>

        </div>

    </div>

    <div class="footer-card">

        <p class="mb-1">
        © 2026 Sistema de Gestión del Transporte (SGT)
        </p>
        
        <p class="mb-1">
           <strong> Maestría en Ingeniería y Desarrollo de Software</strong>
        </p>

        <p class="mb-1">
            Alumno: Moisés Israel Rebolledo Canul
        </p>
        

    </div>

</div>

</body>

</html>