let btn = document.getElementById("btn-press");

btn.addEventListener("click", (e)=>{
    e.preventDefault();

    location.href = "../pages/login.php";
});