

$(document).ready(function() {



	//carga combo inspectores
	cargarInspectores();	
	
	

    // Inicializar todos los tabs
    var triggerTabList = [].slice.call(document.querySelectorAll('#tabsInspeccion .nav-link'));
    triggerTabList.forEach(function(triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl);
        triggerEl.addEventListener('click', function(event) {
            event.preventDefault();
            tabTrigger.show();
        });
    });
});





function cargarInspectores()
{
    $.ajax({

        url: '../controller/InspectorController.php',

        type: 'POST',

        dataType: 'json',


        data: {
            accion: 'listar'
        },


        success: function(response)
        {

            if(response.status !== 'success')
            {                     
                Swal.fire(
                    'Error',
                    response.message,
                    'error'
                );
                return;
            }

            let combo = $('#id_inspector');

            combo.empty();

            combo.append(
                '<option value="">Seleccione</option>'
            );

            $.each(response.data, function(index, item){

                combo.append(`
                    <option value="${item.id_usuario}">
                        ${item.nombre}
                    </option>
                `);

            });

        },

        error: function(xhr)
        {       
            console.error(xhr.responseText);

            Swal.fire(
                'Error',
                'No fue posible cargar los inspectores',
                'error'
            );
        }

    });
}//cargarInspectores



/*
function cargarInspectores()
{
    $.ajax({

        url: '../controllers/InspectorController.php',

        type: 'POST',

        dataType: 'json',

        data: {

            accion: 'listar'

        },

        success: function(response)
        {

            let combo = $("#id_inspector");

            combo.empty();

            combo.append(
                '<option value="">Seleccione</option>'
            );

            //$.each(response, function(index, item){
            $.each(response.data, function(index, item){

                combo.append(`
                    <option value="${item.id_inspector}">
                        ${item.nombre}
                    </option>
                `);

            });

        }

    });
}//cargarInspectores
*/



/*
function cargarInspectores()
{
    $.ajax({
        url: '../api/inspectores.php',
        type: 'POST',
        data: {
            accion: 'listar_inspectores'
        },        
        dataType: 'json',

        success: function(respuesta)
        {
            let combo = $('#id_inspector');

            combo.empty();

            combo.append(
                '<option value="">Seleccione</option>'
            );

            $.each(respuesta, function(i, inspector){

                combo.append(`
                    <option value="${inspector.id_inspector}">
                        ${inspector.nombre}
                    </option>
                `);

            });

        },

        error: function(xhr)
        {
            console.error(xhr.responseText);

            Swal.fire(
                'Error',
                'No fue posible cargar los inspectores',
                'error'
            );
        }
    });
}
*/











/*
$(document).ready(function(){

    $('.nav-link').on('click', function(){

        console.log(
            $(this).attr('data-bs-target')
        );

    });

});

*/


/*
const tabla = $('#tablaConcesiones').DataTable({


        language: {

            decimal: "",
            emptyTable: "No hay información",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "Mostrando 0 registros",
            infoFiltered: "(Filtrado de _MAX_ registros totales)",
            thousands: ",",
            lengthMenu: "Mostrar _MENU_ registros",
            loadingRecords: "Cargando...",
            processing: "Procesando...",
            search: "Buscar:",
            zeroRecords: "No se encontraron resultados",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            }

        },



    ajax: {

        url: '../api/concesiones.php',

        dataSrc: ''
    },

    columns: [

        { data: 'id_concesion' },
        { data: 'numero' },
        { data: 'titular' },
        { data: 'vigencia' },
        { data: 'estatus' },
        { data: 'tipo_concesion' },

        {
            data: null,

            render: function(data){

                return `
                    <button
                        class="btn btn-danger btn-sm"
                        onclick="baja(${data.id_concesion})">

                        Baja

                    </button>
                `;
            }
        }
    ]
});

*/




// js/inspecciones.js
/*
function activarTab(tabId)
{
    const tab = document.querySelector(
        `[data-bs-target="${tabId}"]`
    );

    const bsTab = new bootstrap.Tab(tab);

    bsTab.show();
}
*/





/* ==========================
   GUARDAR
========================== */

/*
document.getElementById('formConcesion')

.addEventListener('submit', function(e){

    e.preventDefault();

    const datos = new FormData(this);

    fetch('../api/alta_concesion.php', {

        method: 'POST',

        body: datos

    })

    .then(res => res.json())

    .then(data => {

        if(data.success){

            //alert("Concesión guardada");
            
			Swal.fire({
		    	icon: 'success',
			    title: 'Éxito',
			    text: 'Concesión guardada correctamente',
			    confirmButtonColor: '#7b002c'
			});            
            

            tabla.ajax.reload();

            document
            .getElementById('formConcesion')
            .reset();
            
            
            
            

        } else {

            //alert(data.message);
			Swal.fire({
			    icon: 'warning',
			    title: 'Atención',
			    text: data.message,
			    confirmButtonColor: '#7b002c'
			});            
        }
    });

});

*/

/* ==========================
   BAJA
========================== */


/*
function baja(id){



    Swal.fire({

        title:'¿Desea dar de baja la concesión?',

        icon:'warning',

        showCancelButton:true

    })

    .then((result)=>{

        if(result.isConfirmed){

        const datos = new FormData();

        datos.append('id', id);

        fetch('../api/baja_concesion.php', {

            method: 'POST',

            body: datos

        })

            .then(res => res.json())

            .then(data => {

                Swal.fire({
                    icon:'success',
                    title:'Vehículo dado de baja'
                });

                tabla.ajax.reload();

                

            });

        }

    });
    
}

*/


