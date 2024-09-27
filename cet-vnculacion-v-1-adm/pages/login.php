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
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header gui text-white justify-content-end">
                    <button type="button" class="btn-light rounded-pill close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true" class="custom-close">
                            <i class="fa-solid fa-xmark"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <img src="../img/notfound.jpg" class="rounded-pill mb-3" alt="Usuario no encontrado"
                        style="width: 150px; height: 150px;">
                    <div class="ms-3">
                        <h5 class="modal-title fs-2 fw-bold text-danger" id="errorModalLabel">Error</h5>
                        <p>Usuario no encontrado.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row rounded p-2 justify-content-center cont_bg shadow-lg mx-5 rounded">
            <div class="col-12 my-3">
                <h2 class="text-center text-danger fw-bold">Administrador</h2>
            </div>

            <div class="col-12 col-lg-10 mt-3">
                <form id="form_admin" class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="mb-2">
                                <label for="id_admin" class="form-label fw-bold">ID:</label>
                                <input type="text" class="form-control rounded-pill" id="id_admin" name="id_admin"
                                    aria-label="ID de Administrador" placeholder="Ingresa tu ID" required>
                                <div class="invalid-feedback">Por favor, ingresa un ID válido.</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-2">
                                <label for="password_admin" class="form-label fw-bold">Contraseña:</label>
                                <input type="password" class="form-control rounded-pill" id="password_admin" name="password_admin"
                                    aria-label="Contraseña de Administrador" placeholder="Ingresa tu contraseña" required>
                                <div class="invalid-feedback">Por favor, ingresa una contraseña válida.</div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 mb-4">
                            <div class="d-flex justify-content-end">
                                <input class="btn text-light py-2 px-4 rounded-pill mx-1 mt-2" type="submit" value="Acceder" style="background-color:#5c0a33;">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="d-flex justify-content-start">
                                <button type="reset" class="btn text-light py-2 px-4 rounded-pill mx-1 btn-icon mt-2" style="background-color:#5c0a33;">
                                    <i class="fa-solid fa-trash ms-3 me-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../components/js.js"></script>
    <script src="../js/login_admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>