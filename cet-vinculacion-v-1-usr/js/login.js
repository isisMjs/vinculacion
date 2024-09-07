let form = document.getElementById("form");
let curpInput = document.getElementById("curp");
let noctrlInput = document.getElementById("noctrl");
let errorContainer = document.getElementById('error');

function showErrorModal() {
    let modal = new bootstrap.Modal(document.getElementById('errorModal'));
    modal.show();
}

form.addEventListener("submit", (e) => {
    // Prevenir el envío del formulario si hay errores de validación
    if (!form.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
        form.classList.add("was-validated");
        return;
    }

    e.preventDefault();

    let datos = new FormData(form);

    fetch('../php/login_db.php', {
        method: "POST",
        body: datos,
    })
    .then((response) => response.json())
    .then((data) => {
        if (data[0].clave === "ok") {
            location.href = "../index.php";
          } else {
           showErrorModal();
          }
        })
        .catch(error => {
            alert("Error: " + error);
        });
});

curpInput.addEventListener('input', function (e) {
    e.target.value = e.target.value.toUpperCase();
});

noctrlInput.addEventListener('input', function (e) {
    const input = e.target;
    const value = input.value;
    const newValue = value.replace(/[^0-9]/g, '');

    if (newValue !== value) {
        input.value = newValue; // Actualizar el valor del campo de entrada
        errorContainer.textContent = 'Solo se permiten números.';
    } else {
        errorContainer.textContent = 'El numero de control debe tener 14 digitos'; // Limpiar el mensaje de error
    }
});