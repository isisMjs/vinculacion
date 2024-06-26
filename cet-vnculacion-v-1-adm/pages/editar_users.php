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

        <div class="container shadow-lg bg-light">

            <form class="row rounded-2 py-2 justify-content-center mx-5 was-validated" novalidate  id="form">

                <div class="col-12 col-lg-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold border border-0 bg-transparent" id="name">NOMBRE: </span>
                        <input name="nombre" type="text" class="form-control" placeholder="NOMBRE(S)" pattern="[a-z A-Z ñ Ñ  ]+" minlength="3" maxlength="42" required>
                        <input name="paterno" type="text" class="form-control" placeholder="AP. PATERNO" pattern="[a-z A-Z ñ Ñ  ]+" minlength="3" maxlength="42" required>
                        <input name="materno" type="text" class="form-control" placeholder="AP. MATERNO" pattern="[a-z A-Z ñ Ñ  ]+" minlength="3" maxlength="42" required>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold border border-0 bg-transparent" id="cargo">CARGO: </span>
                        <select class="form-select rounded-pill" name="cargo">
                            <option value="1">Programar</option>
                            <option value="2">Administrar</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold border border-0 bg-transparent" id="cargo">DEPARTAMENTO: </span>
                        <select class="form-select rounded-pill" name="departamento">
                            <option value="1">Vinculación</option>
                            <option value="2">Control Escolar</option>
                            <option value="3">Sala 2</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold border border-0 bg-transparent" id="cargo">NIVEL DE ACCESO: </span>
                        <select class="form-select rounded-pill" name="nivel_acceso">
                            <option value="1">30%</option>
                            <option value="2">60%</option>
                            <option value="3">100%</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-12 mb-3">
                    <h5 class="text-center my-2 fw-bold">PASSWORD</h5>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold border border-0 bg-transparent" id="password">VIEJA PASSWORD: </span>
                        <input class="form-control rounded rounded-pill" type="password" name="password" pattern="[A-Z a-z 0-9 \_ \-]+" minlength="8" maxlength="20" required>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold border border-0 bg-transparent" id="password2">NUEVA PASSWORD: </span>
                        <input class="form-control rounded rounded-pill" type="password" name="password2" pattern="[A-Z a-z 0-9 \_ \-]+" minlength="8" maxlength="20" required>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold border border-0 bg-transparent" id="password3">NUEVA PASSWORD: </span>
                        <input class="form-control rounded rounded-pill" type="password" name="password3" pattern="[A-Z a-z 0-9 \_ \-]+" minlength="8" maxlength="20" required>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-outline-success py-0 rounded-pill mx-1" id="go_back" type="button">
                        <i class="fa-solid fa-circle-left"></i> Back
                    </button>
                    <button class="btn btn-outline-danger py-0 rounded-pill mx-1"  action="reset()" type="reset">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                    <button class="btn btn-outline-primary py-0 rounded-pill mx-1" id="btn_submit" type="submit">
                        <i class="fa-solid fa-floppy-disk"></i> Save
                    </button>
                </div>

            </form>

        </div>   

        <script src="../js/edit_users.js"></script>
        <script src="../js/add_users.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>