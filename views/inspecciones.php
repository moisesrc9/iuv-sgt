<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Inspecciones - SGT</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet"
href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet"
href="../css/dashboard.css">

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

    <main class="content">

        <!-- FORMULARIO -->
        <div class="card p-4 mb-4">
            <h2>
                <i class="fa-solid fa-clipboard-check"></i>
                Registro de Inspección
            </h2>

            <form id="formInspeccion">



                
                
                
                
            <!-- TABS -->
            <ul class="nav nav-tabs mb-4" id="tabsInspeccion">
                <li class="nav-item">
                    <button class="nav-link active"
                            data-bs-toggle="tab"
                            data-bs-target="#datosGenerales">
                        Datos Generales
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#documental">
                        Verificación Documental
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#fisica">
                        Verificación Física
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#evidencias">
                        Evidencias
                    </button>
                </li>


				<!--
                <li class="nav-item">
                	<button class="nav-link"
				        data-bs-toggle="tab"
				        data-bs-target="#tab_dictamen">
					    Dictamen Final
					</button>
                </li>-->

            </ul>                
                
                
                
                
                
                
                
                
                
                

                <!-- CONTENIDO DE TABS -->
                <div class="tab-content">
                
                
                

                    <!-- DATOS GENERALES -->
                    <div class="tab-pane fade show active" id="datosGenerales">
                        <h5 class="mt-3 mb-3 text-danger">Datos Generales</h5>

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label>Folio</label>
                                <input value="INS-2026-000001" type="text" id="folio" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Fecha</label>
                                <input type="date" id="fecha" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Hora</label>
                                <input type="time" id="hora" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Inspector</label>
                                <select id="id_inspector" class="form-control">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Tipo de Inspección</label>
                                <select id="id_tipo_inspeccion" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option>Ordinaria</option>
                                    <option>Extraordinaria</option>
                                    <option>Seguimiento</option>
                                    <option>Queja Ciudadana</option>
                                    <option>Operativo Especial</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Unidad</label>
                                <select id="id_unidad" class="form-control">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                        </div>

                        <!-- UBICACIÓN -->
                        <h5 class="mt-4 mb-3 text-danger">Ubicación</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Municipio</label>
                                <select id="id_municipio" class="form-control">
                                    <!-- opciones vacías, se llenarán con JS -->
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Localidad</label>
                                <select id="id_localidad" class="form-control">
                                    <!-- opciones vacías -->
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Dirección</label>
                                <input type="text" id="direccion" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label>Latitud</label>
                                <input type="text" id="latitud" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label>Longitud</label>
                                <input type="text" id="longitud" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label>&nbsp;</label>
                                <button type="button" id="btnGPS" class="btn btn-success w-100">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Obtener GPS
                                </button>
                            </div>
                        </div>

                        <!-- DICTAMEN (preeliminar) -->
                        <h5 class="mt-4 mb-3 text-danger">Dictamen</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Resultado Final</label>
                                <select id="dictamen" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option>APROBADO</option>
                                    <option>APROBADO_CON_OBSERVACIONES</option>
                                    <option>NO_APROBADO</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-3">
                            <label>Observaciones Generales</label>
                            <textarea id="observaciones" rows="4" class="form-control"></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-save"></i>
                                Guardar Inspección
                            </button>
                        </div>

                        <div id="mensaje" class="mt-3"></div>
                        
                        
                        
        <!-- ========================================= -->
        <!-- TABLA -->

        <div class="card p-4">
            <table id="tablaInspecciones" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Fecha</th>
                        <th>Inspector</th>
                        <th>Unidad</th>
                        <th>Resultado</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <!-- ========================================= -->
                        
                        
                        
                        
                    </div>
                    <!-- fin DATOS GENERALES -->
                    
                    
                    
                    
                    
                    
                    
                    
                    

                    <!-- VERIFICACIÓN DOCUMENTAL -->
                    <div class="tab-pane fade" id="documental">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="tarjeta_circulacion">
                                    <label class="form-check-label">Tarjeta de circulación vigente</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="concesion_vigente">
                                    <label class="form-check-label">Concesión vigente</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="licencia_operador">
                                    <label class="form-check-label">Licencia vigente</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="seguro_vigente">
                                    <label class="form-check-label">Seguro vigente</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="verificacion">
                                    <label class="form-check-label">Verificación vehicular</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="permiso_ruta">
                                    <label class="form-check-label">Permiso de ruta</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    

                    <!-- VERIFICACIÓN FÍSICA -->
                    <div class="tab-pane fade" id="fisica">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-danger">
                                <tr>
                                    <th width="25%">Concepto</th>
                                    <th width="10%" class="text-center">Cumple</th>
                                    <th width="10%" class="text-center">No Cumple</th>
                                    <th>Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Cada fila sigue el mismo patrón -->
                                <tr>
                                    <td>Carrocería</td>
                                    <td class="text-center"><input type="radio" name="carroceria" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="carroceria" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_carroceria" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Luces</td>
                                    <td class="text-center"><input type="radio" name="luces" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="luces" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_luces" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Llantas</td>
                                    <td class="text-center"><input type="radio" name="llantas" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="llantas" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_llantas" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Frenos</td>
                                    <td class="text-center"><input type="radio" name="frenos" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="frenos" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_frenos" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Espejos</td>
                                    <td class="text-center"><input type="radio" name="espejos" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="espejos" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_espejos" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Asientos</td>
                                    <td class="text-center"><input type="radio" name="asientos" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="asientos" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_asientos" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Extintor</td>
                                    <td class="text-center"><input type="radio" name="extintor" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="extintor" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_extintor" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Botiquín</td>
                                    <td class="text-center"><input type="radio" name="botiquin" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="botiquin" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_botiquin" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Señalización</td>
                                    <td class="text-center"><input type="radio" name="senalizacion" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="senalizacion" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_senalizacion" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Accesibilidad</td>
                                    <td class="text-center"><input type="radio" name="accesibilidad" value="CUMPLE"></td>
                                    <td class="text-center"><input type="radio" name="accesibilidad" value="NO_CUMPLE"></td>
                                    <td><input type="text" id="obs_accesibilidad" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>






                    <!-- EVIDENCIAS -->
                    <div class="tab-pane fade" id="evidencias">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Foto Frontal</label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Foto Trasera</label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Fotografías de Incidencias</label>
                            <input type="file" multiple class="form-control">
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    

                    <!-- DICTAMEN FINAL -->
                    
                    <!--
                    <div class="tab-pane fade" id="tab_dictamen">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Resultado Final</label>
                                <select id="slc_dictamen" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="APROBADO">APROBADO</option>
                                    <option value="APROBADO_CON_OBSERVACIONES">APROBADO CON OBSERVACIONES</option>
                                    <option value="NO_APROBADO">NO APROBADO</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Observaciones Generales</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="mt-3">
                            <label>Acción Correctiva</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    -->
                    
                    
                    
                    
                    

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

<script src="../js/inspecciones.js"></script>

</body>
</html>