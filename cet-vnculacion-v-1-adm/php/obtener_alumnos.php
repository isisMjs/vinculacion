<?php 
    require ('../conexion/conexion.php');
    $json = array();
    
    if ($conn -> connect_error) {
        $json[] = array(
            'clave' => 'ERROR', 
            'mensaje' => 'Error de la conexion con la base de datos.'
        );
    }else{
        $sql = "SELECT * FROM alumnos ORDER BY grupo ASC, paterno ASC, materno ASC";
       // $sql = "SELECT * FROM alumnos";

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
                        'nombre' => $row['paterno'] . "  " . $row['materno'] . " " . $row['nombres'],
                        'direccion' => $row['direccion']. " " ."<br>". " " ."Col.". " " .$row['colonia']." "."<br>#". " " .$row['noext']. " " ."<br>". " " .$row['noint']. " " ."<br>CP". " " .$row['cp'],
                        'telefono' => $row['telefono'],
                        'sexo' => $row['sexo'],
                        'especialidad' => $row['especialidad'],
                        'semestre' => $row['semestre'],
                        'grupo' => $row['grupo'],
                        'generacion' => $row['generacion'],
                        'curp' => $row['curp'],
                        'noctrl' => $row['noctrl']
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