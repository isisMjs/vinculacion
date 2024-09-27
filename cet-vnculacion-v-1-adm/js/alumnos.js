let container = document.getElementById("container_prin");

colocar_values();

function colocar_values() {
  let row = document.createElement("div");

  row.classList.add("row");

  fetch("../php/obtener_alumnos.php")
    .then((response) => response.json())
    .then((data) => {
      if (data[0].clave == "ERROR") {
        alert(data[0].mensaje);
      } else {
        for (let i = 0; i < data.length; i++) {
          let tr = document.createElement("tr");
          let status = data[i].enviado === 1 ? "Enviado" : "No enviado";
          tr.innerHTML = `
                        <td class="border-dark border-2"> ${data[i].grupo} </td>
                        <td class="border-dark border-2"> ${data[i].nombre} </td>
                        <td class="border-dark border-2"> ${data[i].direccion} </td>
                        <td class="border-dark border-2"> ${data[i].telefono} </td>
                        <td class="border-dark border-2"> ${data[i].sexo} </td>
                        <td class="border-dark border-2"> ${data[i].especialidad} </td>
                        <td class="border-dark border-2"> ${data[i].semestre} </td>
                        <td class="border-dark border-2"> ${data[i].generacion} </td>
                        <td class="border-dark border-2"> ${data[i].curp} </td>
                        <td class="border-dark border-2"> ${data[i].noctrl} </td>
                        <td class="border-dark border-2"> ${status} </td>
                    `;
          container.appendChild(tr);
        }
      }
    })
    .catch((error) => {
        location.href="../php/obtener_alumnos.php"
      alert(error);
    });
}