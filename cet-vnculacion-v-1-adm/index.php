<?php 
    session_start();
    
    if (isset($_SESSION['usr_log'])) {
    } else {
        header('location:pages/login.php');
    }
?>

<!DOCTYPE html>
<html lang="MX">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Practicas</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
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
        <?php require("components/encabezado.php"); ?>

        <?php require("components/container.php"); ?>

        <script src="js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>