<?php
 require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

if (!empty($_POST)) {
    if (empty($_POST['listUnidad'])  ) {
        $respuesta = array('status' => false, 'msg' => 'Todos los campos son necesarios');
    } else {
        // $idsolicitud = $_POST['idsolicitud'];
        $listUnidad =filter_var($_POST['listUnidad'], FILTER_SANITIZE_NUMBER_INT);
      
        $idUsuario=$_SESSION['id'];
      //hacemos la sentencia de sql 
      $sqlInsert = "INSERT INTO solicitud (Unidad,IdUsuario,Estado) VALUES(?,?,0)";
      $queryInsert = $pdo->prepare($sqlInsert);
      $resultInsert = $queryInsert->execute(array($listUnidad, $idUsuario));
      $accion = 1;

       if ($resultInsert) {
          if ($accion == 1) {
              $respuesta = array('status' => true, 'msg' => 'Solicitud creado correctamente');
           } else {
            $respuesta = array('status' => true, 'msg' => 'Error al realizar solicitud');
           }
        } 
       
    }

       
   echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);   
 }
    
    

