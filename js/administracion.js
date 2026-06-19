

$(document).ready(function() {




    // Inicializar todos los tabs
    var triggerTabList = [].slice.call(document.querySelectorAll('#tabsAdministra .nav-link'));
    triggerTabList.forEach(function(triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl);
        triggerEl.addEventListener('click', function(event) {
            event.preventDefault();
            tabTrigger.show();
        });
    });
});
