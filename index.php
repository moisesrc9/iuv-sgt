<?php
session_start();

if(isset($_SESSION['usuario'])){
    header("Location: tablero.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SGT - Login</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="css/estilos.css">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<!-- Overlay -->
<div class="overlay"></div>

<!-- CONTENEDOR -->
<div class="contenedor-login">

    <div class="card login-card">

        <!-- LOGO -->
        <div class="text-center  mb-4">

            <img 
                src="assets/logo_artec.png" 
                class="logo img-fluid"
                alt="ARTEC"
            >

        </div>

        <!-- TITULO -->
        <h1 class="titulo">
            Sistema de Gestión del Transporte Público del Estado de Campeche
        </h1>

        <div class="linea"></div>

        <h2 class="subtitulo">
            SGT
        </h2>

        <!-- MENSAJE -->
        <div id="mensaje"></div>

        <!-- FORM -->
        <form id="formLogin">

            <div class="mb-3">

                <label class="form-label">
                    Usuario
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-person-fill"></i>
                    </span>

                    <input 
                        type="email"
                        name="correo"
                        class="form-control"
                        placeholder="Ingrese su correo"
                        required
                        value="moises.rebolledo@gmail.com"
                    >

                </div>

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Contraseña
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>

                    <input 
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Ingrese su contraseña"
                        required
                        value="ClaveAcceso82?"
                    >

                </div>

            </div>

            <button type="submit" class="btn btn-login w-100">

                <i class="bi bi-box-arrow-in-right"></i>
                Ingresar

            </button>

        </form>

    </div>


</div>



<!-- FOOTER -->
<footer class="footer-login">
    <div class="container text-center">


        <p class="mb-1">
           <strong> Maestría en Ingeniería y Desarrollo de Software</strong>
        </p>

        <p class="mb-1">
            Alumno: Moisés Israel Rebolledo Canul
        </p>

        <p class="mb-1">
            Correo:
                moises.rebolledo@gmail.com           
        </p>


    </div>
</footer>





<!-- JS -->
<script src="js/login.js"></script>

</body>
</html>