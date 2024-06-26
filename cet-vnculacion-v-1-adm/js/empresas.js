let container = document.getElementById("container_prin");
let btn = document.getElementById("btn-press");

colocar_values();

btn.addEventListener("click", (e)=>{
    e.preventDefault();

    location.href = "../pages/login.php";
});

function colocar_values() {
    let row = document.createElement("div");

    row.classList.add("row");

    fetch("../php/obtener_empresas.php")
        .then(response => response.json())
        .then(data => {
            if (data[0].clave == "ERROR") {
                alert(data[0].mensaje);
            } else {

                for (let i = 0; i < data.length; i++) {

                    let tr = document.createElement("tr");

                    tr.innerHTML = `
                        <td> ${data[i].id} </td>
                        <td> ${data[i].nombre_empresa} </td>
                        <td> ${data[i].direccion} </td>
                        <td> ${data[i].colonia} </td>
                        <td> ${data[i].cp} </td>
                        <td> ${data[i].telefono} </td>
                        <td> ${data[i].jefe_inmediato} </td>
                        <td> ${data[i].puesto} </td>
                        <td> ${data[i].correo} </td>
                        <td> ${data[i].tipo} </td>
                        <td> ${data[i].giro} </td>
                        <td> 
                            <button type="button" class="btn btn-outline-danger text-center border border-0 py-0 rounded-2 mb-1">
                                <i class="fa-solid fa-eraser"></i>
                            </button>
                            <button type="button" class="btn btn-outline-success text-center border border-0 py-0 rounded-2 mt-1">
                                <i class="fa-solid fa-user-pen"></i>
                            </button>
                        </td>
                    `;

                    container.appendChild(tr);
                }
            }
        })
        .catch (error => {
            console.log( error );
        })

}