let container = document.getElementById("container_prin");
let btn_agregar = document.getElementById("btn_agregar");
let btn = document.getElementById("btn-press");

let formData = new FormData();
let array = new Array();

colocar_values();

btn.addEventListener("click", (e)=>{
    e.preventDefault();

    location.href = "login.php";
});

btn_agregar.addEventListener("click", (e) => {
    e.preventDefault();

    location.href = "agregar_users.php";
});

container.addEventListener("click", (e) => {
    e.preventDefault();

    if (!(e.target.classList[e.target.classList.length - 1] == "btn-editar" || e.target.classList[e.target.classList.length - 1] == "btn-eliminar")) {
        return
    }

    if (e.target.classList[e.target.classList.length - 1] == "btn-editar") {
        if (e.target.tagName == "I") {
            for (let index = 0; index < 5; index++) {
                array.push(e.target.parentElement.parentElement.parentElement.children[index].firstChild.textContent);
            }
        } else {
            for (let index = 0; index < 5; index++) {
                array.push(e.target.parentElement.parentElement.children[index].firstChild.textContent);
            }
        }
        let dataArray = [
            { name: 'id', value: array[0] },
            { name: 'cargo', value: array[2] },
            { name: 'departamento', value: array[3] },
            { name: 'nivel_acceso', value: array[4] }
        ];
        dataArray.forEach(item => {
            formData.append(item.name, item.value);
        });
         editar_user();
    } else {
        if (e.target.tagName == "I") {
            array.push(e.target.parentElement.parentElement.parentElement.children[0].firstChild.textContent);
        } else {
            array.push(e.target.parentElement.parentElement.children[0].firstChild.textContent);
        }
        let dataArray = [
            { name: 'id', value: array[0] }
        ];
        dataArray.forEach(item => {
            formData.append(item.name, item.value);
        });
        delete_user();
    }

});

function editar_user() {
    fetch('../php/guardar_edit.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if(data[0].clave == "exito")
                location.href = "editar_users.php";
            else 
                alert (data[0].mensaje);
        })
        .catch(error => {
            alert (error);
        })
}

function delete_user() {
    fetch('../php/guardar_delete.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            
            alert(data[0].mensaje);
            
            location.href = "users.php";
        })
        .catch(error => {
            alert (error);
        })
}

function colocar_values() {
    let row = document.createElement("div");

    row.classList.add("row");

    fetch("../php/obtener_usuarios.php")
        .then(response => response.json())
        .then(data => {
            if (data[0].clave == "ERROR") {
                alert(data[0].mensaje);
            } else {

                for (let i = 0; i < data.length; i++) {

                    let tr = document.createElement("tr");

                    tr.innerHTML = `
                        <td> ${data[i].id} </td>
                        <td> ${data[i].nombre} </td>
                        <td> ${data[i].cargo} </td>
                        <td> ${data[i].departamento} </td>
                        <td> ${data[i].acceso} </td>
                        <td> 
                            <button type="button" class="btn btn-outline-danger text-center border border-0 p-0 mx-1 rounded-2 btn-eliminar">
                                <i class="fa-solid fa-eraser px-1 btn-eliminar"></i>
                            </button>
                            <button type="button" class="btn btn-outline-success text-center border border-0 p-0 mx-1 rounded-2 btn-editar">
                                <i class="fa-solid fa-user-pen px-1 btn-editar"></i>
                            </button>
                        </td>
                    `;

                    container.appendChild(tr);
                }
            }
        })
        .catch (error => {
            alert ( error );
        })
}