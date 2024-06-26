<?php 
    require ('../conexion/conexion.php');
    $json = array();
    
    if ($conn -> connect_error) {
        $json[] = array(
            'clave' => 'ERROR', 
            'mensaje' => 'Error de la conexion con la base de datos.'
        );
    }else{
        $sql = "SELECT * FROM usuarios";

        if ($conectarMysql = $conn -> query($sql)) {
            if (($conectarMysql -> num_rows) == 0) {
                $json[] = array(
                    'clave' => 'ERROR',
                    'mensaje' => 'No se encuentra nadie registrado.'
                );
            } else {
                while ($row = $conectarMysql -> fetch_array()) {
                    $json[] = array(
                        'clave' => 'Exito',
                        'id' => $row['id'],
                        'nombre' => $row['nombre'] . " " . $row['apellido_pat'] . "  " . $row['apellido_mat'],
                        'cargo' => $row['cargo'],
                        'departamento' => $row['departamento'],
                        'acceso' => $row['nivel_acceso']
                    );
                }
            }
            $conectarMysql -> close();
    
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