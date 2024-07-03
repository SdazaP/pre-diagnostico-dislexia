function mostrarModal() {
    $('#modalConfirmacion').modal('show');
}

function toggleOtroAsunto() {
    var select = document.getElementById("asunto");
    var otroAsunto = document.getElementById("otroAsunto");
    if (select.value === "otro") {
        otroAsunto.style.display = "block";
    } else {
        otroAsunto.style.display = "none";
    }
}

function validateForm(event) {
    var form = document.getElementById('contactForm');
    var inputs = form.querySelectorAll('input, select, textarea');
    var valid = true;
    inputs.forEach(function(input) {
        if (input.value.trim() === '' && input.style.display !== 'none') {
            input.classList.add('is-invalid');
            valid = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });

    if (!valid) {
        event.preventDefault();
        alert('Por favor, rellena todos los campos obligatorios.');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('contactForm').addEventListener('submit', validateForm);
});