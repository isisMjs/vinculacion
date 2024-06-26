<?php 
    require ('../conexion/conexion.php');
    $json = array();
    $id = $_POST['id'];
    
    if ($conn -> connect_error) {
        $json[] = array(
            'clave' => 'ERROR', 
            'mensaje' => 'Error de la conexion con la base de datos.'
        );
    }else{
        $sql = "DELETE FROM usuarios WHERE id = TRIM($id)";

        if ($conectarMysql = $conn -> query($sql)) {
            $json[] = array(
                'clave' => 'Exito',
                'mensaje' => 'Usuario eliminado correctamente.'
            );

            $conn->close();
        } else {
            $json[] = array(
                'clave' => 'ERROR',
                'mensaje' => 'No sea a podido realizar la solicitud.'
            );
        }
    }
    
    header('Content-Type: application/json');
    echo (json_encode($json));
    exit;