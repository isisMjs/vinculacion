let form = document.getElementById("form");

form.addEventListener("submit", (e)=>{
    e.preventDefault();

    let data = new FormData(form);

    fetch('../php/login_db.php',{
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