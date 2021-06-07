<?php
//  require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\trainer\includes\templates\sesiones.php';
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

if (!empty($_POST)) {
    if (empty($_POST['meeting']) || empty($_POST['fecha']) || empty($_POST['hora']) || empty($_POST['estatus']) ) {
      //  $respuesta = array('status' => false, 'msg' => 'Todos los campos son necesarios');
    } else {
        $idsolicitud = $_POST['idsolicitud'];
        $meeting =filter_var($_POST['meeting'], FILTER_SANITIZE_STRING);
        $fecha =filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
        $hora =filter_var($_POST['hora'], FILTER_SANITIZE_STRING);
        $estatus =filter_var($_POST['estatus'], FILTER_SANITIZE_NUMBER_INT);
      
        // $idUsuario=$_SESSION['id']; AND IdUsuario =?
       
        $sql = 'SELECT * FROM solicitud WHERE  IdSolicitud = ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($idsolicitud));
        // 
        $result = $query->fetch(PDO::FETCH_ASSOC);

      //hacemos la sentencia de sql 
    
      if ($result != 0) {
        if ($estatus == 2) {
          $sqlUpdate = 'UPDATE  solicitud SET Liga=?,Fecha=?,Hora=?,Estado=? WHERE IdSolicitud=?';
          $queryUpdate = $pdo->prepare($sqlUpdate);
          $resultInsert = $queryUpdate->execute(array($meeting, $fecha, $hora, $estatus, $idsolicitud));
          $accion = 2;
                } else {
                  $sqlUpdate = 'UPDATE  solicitud SET Liga=?,Fecha=?,Hora=?,Estado=? WHERE IdSolicitud=?';
                  $queryUpdate = $pdo->prepare($sqlUpdate);
                  $resultInsert = $queryUpdate->execute(array($meeting, $fecha, $hora, $estatus, $idsolicitud));
                  $accion = 1;
              }
         
           
    }
    
 
    if ($resultInsert > 0) {
      if ($accion == 1) {
          $respuesta = array('status' => true, 'msg' => 'Cita creada correctamente');
      } else {
    $respuesta = array('status' => true, 'msg' => 'Cita cancelada correctamente ');
  }
  }


    }

       
   echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);   
 }