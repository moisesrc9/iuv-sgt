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

/* ==========================
   GUARDAR
========================== */

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

/* ==========================
   BAJA
========================== */

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