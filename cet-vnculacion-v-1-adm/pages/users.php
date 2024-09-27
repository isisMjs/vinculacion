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

        <div class="container shadow-lg bg-light mt-5">

            <div class="row rounded navbar_bg_brow">
                <div class="col-4 col-md-2 col-lg-1 text-center cont_bg_buttons border border-dark border-bottom-0">
                    <a class="btn py-0" href="alumnos.php">Alumnos</a>
                </div>
                <div class="col-4 col-md-2 col-lg-1 text-center cont_bg_buttons border border-dark border-bottom-0">
                    <a class="btn py-0" href="empresa.php">Empresas</a>
                </div>
                <div class="col-4 col-md-2 col-lg-1 text-center navbar_bg_brow_btn border border-1">
                    <a class="btn py-0 border border-0 disabled" href="#">Usuarios</a>
                </div>
            </div>

            <div class="row">
                <div class="col text-end my-2">
                    <button class="btn btn-success py-0" id="btn_agregar">Agregar</button>
                </div>
            </div>
            
            <div class="table-responsive max_heigth_table">
                <table class="table table-light table-striped table-hover">
                    <thead class="text-center">
                        <tr>
                            <th scope="col"> <span>ID</span> </th>
                            <th scope="col"> <span>Nombre</span> </th>
                            <th scope="col"> <span>Cargo</span> </th>
                            <th scope="col"> <span>Departamento</span> </th>
                            <th scope="col"> <span>Nivel de Acceso</span> </th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-center" id="container_prin">

                    </tbody>
                </table>
            </div>
        </div>   
        <script src="../js/close.js"></script>
        <script src="../js/users.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>