
$(document).ready(function(){

    cargarConcesiones();

    listarVehiculos();

});


// GUARDAR
$("#formVehiculo").submit(function(e){

    e.preventDefault();

    let datos = {

        placa: $("#placa").val(),
        marca: $("#marca").val(),
        modelo: $("#modelo").val(),
        id_concesion: $("#id_concesion").val()

    };

    fetch("../api/alta_vehiculos.php", {

        method:"POST",

        headers:{
            "Content-Type":"application/json"
        },

        body: JSON.stringify(datos)

    })

    .then(res => res.json())

    .then(data => {

        Swal.fire({
            icon:data.success ? "success":"error",
            title:data.message
        });

        if(data.success){

            $("#formVehiculo")[0].reset();

            $('#tablaVehiculos').DataTable().destroy();

            listarVehiculos();

        }

    });

});


// LISTAR VEHÍCULOS
function listarVehiculos(){

    $('#tablaVehiculos').DataTable({

        ajax:{
            url:'../api/listar_vehiculos.php',
            dataSrc:'data'
        },

        columns:[

            {data:'id_vehiculo'},
            {data:'placa'},
            {data:'marca'},
            {data:'modelo'},
            {data:'estatus'},
            {data:'numero'},

            {
                data:null,

                render:function(data){

                    return `
                        <button
                        class="btn btn-danger btn-sm"
                        onclick="eliminar(${data.id_vehiculo})">

                        Baja

                        </button>
                    `;
                }
            }

        ],

        destroy:true,

        language:{
            url:'//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
        }

    });

}


// COMBO CONCESIONES
function cargarConcesiones(){

    fetch("../api/listar_concesiones.php")

    .then(res => res.json())

    .then(data => {

        let combo = document.getElementById("id_concesion");

        data.forEach(c => {

            combo.innerHTML += `
                <option value="${c.id_concesion}">

                    ${c.numero}
                    -
                    ${c.tipo_concesion}
                    -
                    ${c.titular}

                </option>
            `;

        });

    });

}


// BAJA
function eliminar(id){

    Swal.fire({

        title:'¿Deseas dar de baja al vehículo?',

        icon:'warning',

        showCancelButton:true

    })

    .then((result)=>{

        if(result.isConfirmed){

            let formData = new FormData();

            formData.append("id", id);

            fetch("../api/baja_vehiculo.php", {

                method:'POST',

                body:formData

            })

            .then(res => res.json())

            .then(data => {

                Swal.fire({
                    icon:'success',
                    title:'Vehículo dado de baja'
                });

                $('#tablaVehiculos').DataTable().destroy();

                listarVehiculos();

            });

        }

    });

}


