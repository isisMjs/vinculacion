<?php
    $url = $_SERVER["REQUEST_URI"];
    $esta_en_pages = "";

    (strpos($url,"/pages"))? $esta_en_pages = "../" : $esta_en_pages = "";
?>

<div class="container shadow-lg mt-5">
    <div class="row rounded navbar_bg_brow">
        <div class="col-4 col-md-2 col-lg-1 text-center cont_bg_buttons border border-dark border-bottom-0">
            <a class="btn py-0" href="pages/alumnos.php">Alumnos</a>
            
        </div>
        <div class="col-4 col-md-2 col-lg-1 text-center cont_bg_buttons border border-dark border-bottom-0">
            <a class="btn py-0" href="pages/empresa.php">Empresas</a>
        </div>
        <div class="col-4 col-md-2 col-lg-1 text-center cont_bg_buttons border border-dark border-bottom-0">
            <a class="btn py-0" href="pages/users.php">Usuarios</a>
        </div>
    </div>
    <div class="row cont_bg rounded_index justify-content-center">
        <div class="col">
            
        </div>
    </div>
</div>