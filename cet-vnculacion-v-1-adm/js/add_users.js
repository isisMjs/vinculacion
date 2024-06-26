let form = document.getElementById("form");
let btn = document.getElementById("btn-press");
let btn_submit = document.getElementById("btn_submit");
let go_back = document.getElementById("go_back");

btn.addEventListener("click", (e)=>{
    e.preventDefault();

    location.href = "../pages/login.php";
});

go_back.addEventListener("click", (e)=>{
    e.preventDefault();

    location.href = "../pages/users.php";
});

btn_submit.addEventListener("click", (e) => {
    e.preventDefault();

    let datos = new FormData(form);

    console.log(datos);

    fetch("../php/insertar_usuarios.php",{
        method: "post",
        body: datos
    })
        .then(response => response.json())
        .then(data => {
            
            alert(data[0].mensaje)

            if (data[0].clave !== "ERROR") 
                form.reset();
            
        })
        .catch(error => {
            alert (error);
        })
});