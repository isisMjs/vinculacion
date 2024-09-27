<?php
session_start();

$_SESSION['adm_log'] = 'ADM';

require_once("../conexion/conexion.php");
$json = array();
if ($conn->connect_error) {
   $json[] = array(
      'clave' => 'error',
      'nombre' => 'Error: La conexión no se pudo establecer'
   );
} 

if (isset($_POST['id_admin']) && isset($_POST['password_admin'])) {
   $id = $conn->real_escape_string($_POST['id_admin']);
   $pass = $conn->real_escape_string($_POST['password_admin']);

   $sql = "SELECT * FROM usuarios WHERE id = '$id' AND password = '$pass'";
   if ($resultado = $conn->query($sql)) {
      if ($resultado->num_rows === 0) {
         $json[] = array(
            'clave' => 'error',
            'nombre' => 'Error: Usuario no encontrado'
         );  
      } else {
         $row = $resultado->fetch_array();
         $json[] = array(
            'clave' => 'ok',
            'nombre' => 'Incio exitoso'
         );  
      } 
   } else{
      $json[] = array(
         'clave' => 'error',
         'nombre' => 'Error de consulta'
      );
   }
} else {
   $json[] = array(
      'clave' => 'error',
      'nombre' => 'Error, Los datos no fueron recibidos correctamente'
   );
}

header('Content-Type: application/json');
echo json_encode($json);

$conn->close();