<?php 
    // require ('../conexion/conexion.php');
    // $json = array();
    
    // if ($conn -> connect_error) {
    //     $json[] = array(
    //         'clave' => 'ERROR', 
    //         'mensaje' => 'Error de la conexion con la base de datos.'
    //     );
    // }else{
    //     $sql = "SELECT * FROM alumnos";

    //     if ($conectarMysql = $conn -> query($sql)) {
    //         if (($conectarMysql -> num_rows) === 0) {
    //             $json[] = array(
    //                 'clave' => 'ERROR',
    //                 'mensaje' => 'No se encuentra nadie registrado.'
    //             );
    //         } else {
    //             while ($row = $conectarMysql -> fetch_array()) {
    //                 $json[] = array(
    //                     'clave' => 'Exito',
    //                     'id' => $row['id'],
    //                     'nombre_empresa' => $row['nombre_empresa'],
    //                     'direccion' => $row['direccion'],
    //                     'colonia' => $row['colonia'],
    //                     'cp' => $row['cp'],
    //                     'telefono' => $row['telefono'],
    //                     'jefe_inmediato' => $row['jefe_inmediato'],
    //                     'correo' => $row['correo'],
    //                     'puesto' => $row['puesto'],
    //                     'tipo' => $row['tipo'],
    //                     'giro' => $row['giro']
    //                 );
    //             }
    //         }
    //         $conectarMysql -> close();
    
    //         $conn->close();
    //     } else {
    //         $json[] = array(
    //             'clave' => 'ERROR',
    //             'mensaje' => 'No sea a podido realizar la solicitud.'
    //         );
    //     }
    // }
    
    // header('Content-Type: application/json');
    // echo (json_encode($json));
    // exit;