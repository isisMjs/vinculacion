<?php
$url = $_SERVER["REQUEST_URI"];
$esta_en_pages = "";
$display_1 = "";
$display_2 = "d-none";
$display_3 = "d-none";
$clase = "";
$title = "Solicitud De Practicas Profesionales";

(strpos($url, "/pages")) ? $esta_en_pages = "../" : $esta_en_pages = "";

if (strpos($url, "login.php")) {
    $display_1 = "d-none";
    $display_2 = "";
    $display_3 = "";
    $title = "Comienza tu camino profesional";
}

if ($esta_en_pages == "../")
    session_start();

if (isset($_SESSION['usr'])) ($esta_en_pages == "../") ? header('location:../pages/login.php') : header('location:pages/login.php');

$clase = "disabled";

?>

<div class="container p-3">
    <div class="row justify-content-center shadow-lg rounded-pill p-1" id="buttons_var">
        <div class="col-12 col-md-2 my-auto text-start">
            <img class="rounded-pill d-none d-lg-block" src="<?php echo $esta_en_pages ?>img/logo.png" alt="Logotipo del Cetis 61" width="70%">
            <img class="rounded-pill d-none d-md-block d-lg-none" src="<?php echo $esta_en_pages ?>img/logo.png" alt="Logotipo del Cetis 61" width="130%">
        </div>

        <div class="col-12 col-md-8 my-auto text-center d-flex justify-content-center align-items-center">
            <h1 class="text-light fw-bold me-5"><?php echo $title ?></h1>
        </div>
        <div class="col-12 col-md-2 my-auto text-center text-md-end">
        <button class="rounded-3 btn btn-outline-light py-0 px-1 d ms-5 <?php echo $display_3 ?> " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Iniciar sesion como administrador" id="btn-admon">
                <i class="fa-solid fa-user-tie <?php echo $display_3 ?>"></i>
            </button>
        <div class="col-12 col-md-2 my-auto text-center text-md-end">
            <button class="rounded-3 btn btn-outline-danger py-0 px-1 d <?php echo ($display_1) ?>" id="btn-press">
                <i class="fa-solid fa-arrow-right-from-bracket <?php echo $display_1 ?> " style="color: #ffffff;"></i>
            </button>
        </div>
    </div>
</div>
