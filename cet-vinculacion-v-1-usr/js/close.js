const cerrar = document.getElementById("btn-press");

cerrar.addEventListener("click", (e) => {
  fetch("php/close.php", {
    method: "POST",
  }).then((response) => {
    location.href = "../index.php";
  });
});
