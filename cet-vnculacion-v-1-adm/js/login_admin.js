let btn = document.getElementById("btn-press");
let form_admin = document.getElementById("form_admin");

btn.addEventListener("click", (e)=>{
    e.preventDefault();

    location.href = "../pages/login.php";
});

form_admin.addEventListener("submit", (e)=>{
    e.preventDefault();

    let data = new FormData(form_admin);

    fetch('../php/login_admin_db.php',{
        method: "POST",
        body: data
    })
        .then(datas => datas.json)
        .then(datos => {
            location.href = "../index.php";
        })
        .catch(error => {
            alert (error);
        })
    
});