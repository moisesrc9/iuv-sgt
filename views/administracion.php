<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Administración - SGT</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet"
href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet"
href="../css/dashboard.css">

</head>

<body>

<!--
<div class="container-fluid mt-4">

<div class="card">

<div class="card-header bg-danger text-white">

    <h3>
        <i class="fa-solid fa-gears"></i>
        Administración del Sistema
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
            <li>
                <a href="../tablero.php">
                    <i class="fa-solid fa-chart-line"></i>
                    Tablero
                </a>
            </li>
        </ul>
    </aside>

    <main class="content">

        <!-- FORMULARIO -->
        <div class="card p-4 mb-4">
            <h2>
                <i class="fa-solid fa-clipboard-check"></i>
                Administración del Sistema
            </h2>

            <form id="formInspeccion">



                
                
                
                
            <!-- TABS -->
            <ul class="nav nav-tabs mb-4" id="tabsAdministra">
                <li class="nav-item">
                    <button class="nav-link active"
                            data-bs-toggle="tab"
                            data-bs-target="#usuarios">
                        Usuarios
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#roles">
                        Roles
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#permisos">
                        Privilegios
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#bitacora">
                        Bitácora
                    </button>
                </li>


            </ul>                
                
                
                
                
                
                
                
                
                
                

                <!-- CONTENIDO DE TABS -->
                <div class="tab-content">
                
                
                

                    <!-- USUARIOS -->
                    <div class="tab-pane fade show active" id="usuarios">
                        <!-- <h5 class="mt-3 mb-3 text-danger">Alta de Usuario</h5> -->
						
    <div class="card-header bg-danger text-white">
        <h5>Alta de Usuario</h5>
    </div>
                        
                        



 <div class="card-body">

        <div class="row">

            <div class="col-md-6 mb-3">
                <label>Nombre Completo</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>Correo Electrónico</label>
                <input type="email" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label>Usuario</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label>Contraseña</label>
                <input type="password" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label>Confirmar Contraseña</label>
                <input type="password" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label>Grupo</label>
                <select class="form-select">
                    <option>Administrador</option>
                    <option>Operador</option>
                    <option>Inspector</option>
                    <option>Supervisor</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label>Estatus</label>
                <select class="form-select">
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>
            </div>

        </div>

        <button class="btn btn-success">
            Guardar Usuario
        </button>

    </div>


                          <!-- ========================================= -->
        <!-- TABLA -->


<div class="card-body">
<div class="row mb-3">
            <table id="tablaUsr" class="table table-bordered table-hover">
                <thead class="table-danger">
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Estatus</th>                        
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>


<tr>
<td>1</td>
<td>moisesrc</td>
<td>Moisés Rebolledo Canul</td>
<td>Administrador</td>
<td>Alta</td>
<td>2026-06-18</td>

<td>
	<button class="btn btn-warning btn-sm">
		<i class="fa fa-edit"></i>
	</button>

	<button class="btn btn-danger btn-sm">
		<i class="fa fa-trash"></i>
	</button>

</td>
</tr>


<tr>
<td>2</td>
<td>admin</td>
<td>Administrador General</td>
<td>Administrador</td>
<td>Alta</td>
<td>2026-06-18</td>

<td>
	<button class="btn btn-warning btn-sm">
		<i class="fa fa-edit"></i>
	</button>

	<button class="btn btn-danger btn-sm">
		<i class="fa fa-trash"></i>
	</button>

</td>
</tr>
<tr>
<td>3</td>
<td>juan.perez</td>
<td>Juan Pérez</td>
<td>Operador</td>
<td>Alta</td>
<td>2026-06-18</td>

<td>
	<button class="btn btn-warning btn-sm">
		<i class="fa fa-edit"></i>
	</button>

	<button class="btn btn-danger btn-sm">
		<i class="fa fa-trash"></i>
	</button>

</td>
</tr>


</tbody>

</table>
</div>
</div>
        <!-- ========================================= -->          
                            
                            
                    </div>
                    <!--fin usuarios-->
                        
                        
                        
                        

                        
                        
                    
                    
                    
                    
                    
                    

                    <!-- ROLES -->
                    <div class="tab-pane fade" id="roles">

                        <!--<h5 class="mt-3 mb-3 text-danger">Roles de Usuario</h5>-->
    <div class="card-header bg-danger text-white">
        <h5>Alta de Roles</h5>
    </div>
                        
                        
    <div class="card-body">

        <div class="row">

            <div class="col-md-6 mb-3">
                <label>Nombre del Grupo</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label>Descripción</label>
                <input type="text" class="form-control">
            </div>

        </div>

        <button class="btn btn-success">
            Guardar Rol
        </button>
    
       </div>  



<div class="card-body">

<div class="row mb-3">


            <table id="tablaRoles" class="table table-bordered table-hover">
                <thead class="table-danger">
                    <tr>
                        <th>ID</th>
                        <th>Rol de usuario</th>
                        <th>Descripción</th>
                        <th>Fecha</th>                        
                        <th>Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
				<tr>
					<td>1</td>
					<td>Admin</td>
					<td>Administrador</td>
					<td>2026-06-18</td>

					<td>
						<button class="btn btn-warning btn-sm">
							<i class="fa fa-edit"></i>
						</button>

						<button class="btn btn-danger btn-sm">
							<i class="fa fa-trash"></i>
						</button>

					</td>
				</tr>
				</tbody>

				</table>        

		</div>
		</div>
                    
                    
                    </div>
                    <!--tab-pane fade-->
                    <!-- FIN ROLES-->
                    
                    
                    
                    
                    

                    <!-- PERMISOS DE USUARIO -->
                    <div class="tab-pane fade" id="permisos">
                    

<div class="card p-4 mb-4">
	
    <div class="card-header bg-danger text-white">
        <h5>Asignación de Permisos</h5>
    </div>




<div class="card-body">

<div class="row mb-3">

<div class="col-md-4">
	<label>Grupo</label>
	<select class="form-select">
		<option>Administrador</option>
		<option>Capturista</option>
		<option>Inspector</option>
		<option>Supervisor</option>	
	</select>
</div>

</div>



<table class="table table-bordered">

<thead class="table-danger">

<tr>

<th>Módulo</th>
<th>Consultar</th>
<th>Registrar</th>
<th>Editar</th>
<th>Eliminar</th>

</tr>

</thead>

<tbody>

<tr>
<td>Usuarios</td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
</tr>

<tr>
<td>Concesiones</td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
</tr>

<tr>
<td>Vehículos</td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
</tr>

<tr>
<td>Operadores</td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
<td><input type="checkbox"></td>
</tr>

</tbody>

</table>


        <button class="btn btn-success">
            Guardar Permiso
        </button>


</div>

</div>

                    
                    </div>
                    <!--FIN PERMISOS USR-->






                    <!-- BITACORA -->
                    <div class="tab-pane fade" id="bitacora">


<div class="card p-4 mb-4">
	
    <div class="card-header bg-danger text-white">
        <h5>Bitácora de movimientos</h5>
    </div>
    
    
<div class="card-body">

<div class="row mb-3">


<table id="tblBitacora" class="table table-bordered">

<thead class="table-danger">

<tr>

<th>Fecha</th>
<th>Usuario</th>
<th>Módulo</th>
<th>Acción</th>
<th>IP</th>

</tr>

</thead>

<tbody>

<tr>

<td>01/03/2026</td>
<td>admin</td>
<td>Usuarios</td>
<td>Alta Usuario</td>
<td>192.168.1.1</td>

</tr>

</tbody>

</table>

</div>
</div>
</div>


                    </div>
                    <!--FIN BITACORA -->
                    
                    
                    
                    
                    
                    
                
                    
                    
                    
                    
                    

                </div> <!-- fin tab-content -->
            </form>
        </div> <!-- fin card del formulario -->


    </main>

</div> <!-- fin wrapper -->





<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="../js/administracion.js"></script>

</body>
</html>