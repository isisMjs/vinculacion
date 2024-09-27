const formularioEsc = document.getElementById("formularioEsc");
const formularioEmp = document.getElementById("formularioEmp");
const escolar = document.getElementById("personal");
const volver = document.getElementById("volver");
const volver2 = document.getElementById("volver2");
const volver3 = document.getElementById("volver3");
const enviar = document.getElementById("btn");
let enviado = 0;

let forms = document.querySelectorAll(".needs-validation");
let arrForm = Array.prototype.slice.call(forms);

arrForm.forEach(function (form) {
  form.addEventListener(
    "submit",
    function (event) {
      event.preventDefault();
      if (!form.checkValidity()) {
        event.stopPropagation();
        form.classList.add("was-validated");
      } else {
        form.classList.add("was-validated");

        if (form.name === "personal") {
          escolar.classList.add("hidden");
          formularioEsc.classList.remove("hidden");
        } else if (form.name === "formularioEsc") {
          formularioEmp.classList.remove("hidden");
          formularioEsc.classList.add("hidden");
        }
      }
    },
    false
  );
});

volver2.addEventListener("click", () => {
  formularioEsc.classList.add("hidden");
  escolar.classList.remove("hidden");
});

volver3.addEventListener("click", () => {
  formularioEmp.classList.add("hidden");
  formularioEsc.classList.remove("hidden");
});

/*imagenInput.addEventListener("change", function (e) {
  const file = e.target.files[0];
  const extension = ["image/jpeg", "image/jpg", "image/png"];
  const maxSize = 1023 * 1024;
  const url = URL.createObjectURL(file);
  if (file) {
    if (file.size > maxSize) {
      alert(
        "El archivo es demasiado grande. El tamaño máximo permitido es 1023 KB."
      );
      fileInput.value = "";
      return;
    }

    if (!extension.includes(file.type)) {
      alert(
        "Tipo de archivo no permitido. Solo se permiten archivos JPEG, JPG y PNG."
      );
      imagenInput.value = "";
      return;
    }

    imagenSeleccionda.src = url;
  }
});*/

let today = new Date();

let yyyy = today.getFullYear();
let mm = today.getMonth() + 1;
let dd = today.getDate();
if (mm < 10) {
  mm = "0" + mm;
}
if (dd < 10) {
  dd = "0" + dd;
}
let formattedDate = yyyy + "-" + mm + "-" + dd;

document.getElementById("fechaEnvio").value = formattedDate;

formularioEmp.addEventListener("submit", (e) => {
  e.preventDefault();
  document.getElementById("fechaEnvio").disabled = false;
  enviado=1;
  enviarDatos();
  document.getElementById("fechaEnvio").disabled = true;
});

function enviarDatos() {
  fetch("conexion/insert.php", {
    method: "POST",
  })
    .then((reponse) => reponse.json())
    .then((data) => {
      alert(data[0].clave);

      alert(data[0].mensaje);

      alert(
        "cuando su solicitud, sea aceptada por la Lic. Nadia, podra acceder a los reportes."
      );
    })
    .catch((error) => {
      location.href="conexion/insert.php"
      console.log("Error en la conexión con el servidor: " + error);
    });
}
