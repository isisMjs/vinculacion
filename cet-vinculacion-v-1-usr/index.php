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

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&family=Merienda:wght@300..900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <!-- FONT AWESOME ICONS -->
    <script src="https://kit.fontawesome.com/aef90a9808.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php require("components/encabezado.php"); ?>

    <?php
    require('conexion/conexion.php'); // Asegúrate de que este archivo contenga tu conexión a la base de datos

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Supongamos que el ID del usuario está almacenado en la sesión
    $id_usuario = $_SESSION['usr_id'];

    // Consulta para obtener el valor de 'enviado'
    $sql = "SELECT enviada FROM alumnos WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en la consulta: " . $conn->error); // Mostrar el error si la consulta falla
    }

    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $enviada = $row['enviada'];

        // Verifica si el valor de 'enviada' es 0 o 2 y muestra el archivo correspondiente
        if ($enviada == 0) {
            include('pages/solicitud.php');
        } 
        if ($enviada == 1) {
            include('pages/reporte.php');
        }
    } else {
        echo "No se encontró el usuario.";
    }

    $stmt->close();
    $conn->close();

    ?>

    <script src="js/close.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>