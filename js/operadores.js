document.addEventListener("DOMContentLoaded", () => {

    cargarOperadores();
    cargarConcesiones();
//    cargarVehiculos();


document.getElementById("id_concesion")
.addEventListener("change", function(){

    let idConcesion = this.value;

    cargarVehiculos(idConcesion);

});


});

function cargarConcesiones(){

    fetch("../api/concesiones_activas.php")
    .then(res => res.json())
    .then(data => {

        let combo = document.getElementById("id_concesion");

        data.forEach(c => {

            combo.innerHTML += `
                <option value="${c.id_concesion}">
                    ${c.numero} - ${c.tipo_concesion} - ${c.titular}
                </option>
            `;

        });

    });

}


/*
function cargarVehiculos(){

    fetch("../api/vehiculos_activos.php")
    .then(res => res.json())
    .then(data => {

        let combo = document.getElementById("id_vehiculo");

        data.forEach(v => {

            combo.innerHTML += `
                <option value="${v.id_vehiculo}">
                    ${v.placa} - ${v.marca} ${v.modelo}
                </option>
            `;

        });

    });
}
*/

function cargarVehiculos(idConcesion){

    let combo = document.getElementById("id_vehiculo");

    combo.innerHTML = `
        <option value="">Cargando vehículos...</option>
    `;

    fetch(`../api/vehiculos_activos.php?id_concesion=${idConcesion}`)

    .then(res => res.json())

    .then(data => {

        combo.innerHTML = `
            <option value="">Seleccione vehículo...</option>
        `;

        if(data.length === 0){

            combo.innerHTML = `
                <option value="">
                    No hay vehículos asociados
                </option>
            `;

            return;
        }

        data.forEach(v => {

            combo.innerHTML += `
                <option value="${v.id_vehiculo}">
                    ${v.placa} - ${v.marca} ${v.modelo}
                </option>
            `;

        });

    });

}


function guardarOperador(){

    let formData = new FormData();

    formData.append("nombre",
        document.getElementById("nombre").value);

    formData.append("licencia",
        document.getElementById("licencia").value);

    formData.append("estatus",
        document.getElementById("estatus").value);

    formData.append("id_concesion",
        document.getElementById("id_concesion").value);

    formData.append("id_vehiculo",
        document.getElementById("id_vehiculo").value);

    fetch("../api/alta_operador.php",{
        method:"POST",
        body:formData
    })
    .then(res => res.json())
    .then(data => {

        if(data.success){

           // alert("Operador guardado");
           
			Swal.fire({
		    	icon: 'success',
			    title: 'Éxito',
			    text: 'Operador guardado correctamente',
			    confirmButtonColor: '#7b002c'
			});            
           

            cargarOperadores();

        }else{

           // alert("Error");
			Swal.fire({
			    icon: 'warning',
			    title: 'Atención',
			    text: data.message,
			    confirmButtonColor: '#7b002c'
			});            
           

        }

    });

}


function cargarOperadores(){

    fetch("../api/listar_operadores.php")

    .then(res => res.json())

    .then(data => {

        // Si ya existe DataTable
        if ($.fn.DataTable.isDataTable('#tablaOperadoresData')) {

            $('#tablaOperadoresData').DataTable().destroy();

        }

        let tabla = document.getElementById("tablaOperadores");

        tabla.innerHTML = "";

        data.forEach(o => {

            tabla.innerHTML += `
                <tr>
                    <td>${o.id_operador}</td>
                    <td>${o.nombre}</td>
                    <td>${o.licencia}</td>
                    <td>${o.numero}</td>
                    <td>${o.placa}</td>
                    <td>${o.estatus}</td>

                    <td>
                        <button 
                            class="btn btn-danger btn-sm"
                            onclick="bajaOperador(${o.id_operador})">
                            Baja
                        </button>
                    </td>
                </tr>
            `;

        });

        // Inicializar DataTable
        $('#tablaOperadoresData').DataTable({

            responsive: true,

            pageLength: 10,

            language: {

                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'

            }

        });

    });

}

/*
function cargarOperadores(){

    fetch("../api/listar_operadores.php")
    .then(res => res.json())
    .then(data => {

        let tabla = document.getElementById("tablaOperadores");

        tabla.innerHTML = "";

        data.forEach(o => {

            tabla.innerHTML += `
                <tr>
                    <td>${o.id_operador}</td>
                    <td>${o.nombre}</td>
                    <td>${o.licencia}</td>
                    <td>${o.numero}</td>
                    <td>${o.placa}</td>
                    <td>${o.estatus}</td>

                    <td>
                        <button 
                            class="btn btn-danger btn-sm"
                            onclick="bajaOperador(${o.id_operador})">
                            Baja
                        </button>
                    </td>
                </tr>
            `;

        });

    });

}
*/

/*
function bajaOperador(id){

    if(!confirm("¿Desea dar de baja el operador?")){
        return;
    }

    let formData = new FormData();

    formData.append("id",id);

    fetch("../api/baja_operador.php",{
        method:"POST",
        body:formData
    })
    .then(res => res.json())
    .then(data => {

        if(data.success){

            alert("Operador dado de baja");

            cargarOperadores();

        }

    });

}
*/


function bajaOperador(id){

    Swal.fire({

        title: '¿Desea dar de baja el operador?',
        text: 'El estatus cambiará a INACTIVO',
        icon: 'warning',

        showCancelButton: true,

        confirmButtonColor: '#7b002c',
        cancelButtonColor: '#6c757d',

        confirmButtonText: 'Sí, dar de baja',
        cancelButtonText: 'Cancelar'

    }).then((result) => {

        if(result.isConfirmed){

            let formData = new FormData();

            formData.append("id", id);

            fetch("../api/baja_operador.php",{
                method:"POST",
                body:formData
            })

            .then(res => res.json())

            .then(data => {

                if(data.success){

                    Swal.fire({

                        icon: 'success',
                        title: 'Operador dado de baja',
                        text: 'El operador fue actualizado correctamente.',
                        confirmButtonColor: '#7b002c'

                    });

                    cargarOperadores();

                }else{

                    Swal.fire({

                        icon: 'error',
                        title: 'Error',
                        text: 'No fue posible dar de baja el operador.',
                        confirmButtonColor: '#7b002c'

                    });

                }

            })

            .catch(error => {

                Swal.fire({

                    icon: 'error',
                    title: 'Error del sistema',
                    text: 'Ocurrió un problema en la comunicación.',
                    confirmButtonColor: '#7b002c'

                });

                console.error(error);

            });

        }

    });

}

