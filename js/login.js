const form = document.getElementById('formLogin');

form.addEventListener('submit', function(e){

    e.preventDefault();

    const datos = new FormData(form);

    fetch('controller/LoginController.php', {
        method: 'POST',
        body: datos
    })
    .then(res => res.json())
    .then(data => {

        let mensaje = document.getElementById('mensaje');

        if(data.status === 'success'){

            mensaje.innerHTML = `
                <div class="alert alert-success">
                    ${data.message}
                </div>
            `;

            setTimeout(() => {
                //window.location.href = 'dashboard.php';
                window.location.href = 'tablero.php';
            }, 1500);

        } else {

            mensaje.innerHTML = `
                <div class="alert alert-danger">
                    ${data.message}
                </div>
            `;
        }

    })
    .catch(error => {
        console.error(error);
    });

});