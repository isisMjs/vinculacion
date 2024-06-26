<?php
    session_start();

    require ("conexion.php");
    
    $json = array();

    if ($conn->connect_error) {
        $json[] = array(
            'clave' => 'ERROR',
            'mensaje' => 'Conexion con la base de datos, erronia.'
        );
    } else {
        // $img = 'imagen';

        // $incentivo = $_POST['incentivo'];
        // $departamento = $_POST['departamento'];
        // $horario = $_POST['horario'];
        // $puesJefe = $_POST['puesJefe'];
        // $act = $_POST['act'];
        // $giro = $_POST['giro'];
        // $fechaIni = $_POST['fechaIni'];
        // $fechaTerm = $_POST['fechaTerm'];

        // // Format Fecha = 0000-00-00

        // $sql = "INSERT INTO alumnos (id, img, giro, fechaIni, fechaTerm, incentivo, departamento, horario, puesJefe, act, soliP) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("ssssssssssi", $img, $giro, $fechaIni, $fechaTerm, $incentivo, $departamento, $horario, $puesJefe, $act, 1);

        // $stmt->execute();

        // $stmt->close();
        // $conn->close();

        $json[] = array(
            'clave' => 'ok',
            'mensaje' => 'Datos enviados correctamente.'
        );
    }
    
    header('Content-Type: application/json');
    echo (json_encode($json));
    exit;
?>  