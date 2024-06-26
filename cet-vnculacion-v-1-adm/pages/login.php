<!DOCTYPE html>

<html lang="MX">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Practicas</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&family=Merienda:wght@300..900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        
        <!-- FONT AWESOME ICONS -->
        <script src="https://kit.fontawesome.com/aef90a9808.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php require("../components/encabezado.php"); ?>

        <div class="container">
            <div class="row rounded p-2 justify-content-center cont_bg shadow-lg mx-5 rounded">
                <div class="col-12 my-3">
                    <h2 class="text-center text-primary fw-bold">Administrador</h2>
                </div>
                <div class="col-12 col-lg-5">
                    <form id="form_admin">

                        <div class="input-group mb-3">
                            <span class="input-group-text fw-bold border border-0 bg-transparent" id="id_admin_label">ID: </span>
                            <input name="id_admin" id="id_admin" type="text" class="form-control rounded-pill" aria-label="Sizing example input" aria-describedby="id_admin_label">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text fw-bold border border-0 bg-transparent" id="password_label">PASSWORD: </span>
                            <input name="password_admin" id="password_admin" type="text" class="form-control rounded-pill" aria-label="Sizing example input" aria-describedby="password_label">
                        </div>

                        <div class="text-center">        
                            <input class="btn btn-outline-danger py-0 rounded-pill mx-1" action="reset()" type="reset" value="Borrar">
                            <input class="btn btn-outline-primary py-0 rounded-pill mx-1" type="submit" value="Iniciar Sesion">
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <script src="../js/login_admin.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>