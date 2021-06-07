<?php
//  require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\trainer\includes\templates\sesiones.php';
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

if (!empty($_POST)) {
    if (empty($_POST['estado'])  ) {
      //  $respuesta = array('status' => false, 'msg' => 'Todos los campos son necesarios');
    } else {
        $idevaluacion = $_POST['idevaluacion'];
        $estado =filter_var($_POST['estado'], FILTER_SANITIZE_NUMBER_INT);
      
        // $idUsuario=$_SESSION['id']; AND IdUsuario =?
       
        $sql = 'SELECT * FROM evaluacion WHERE  IdEvaluacion = ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($idevaluacion));
        // 
        $result = $query->fetch(PDO::FETCH_ASSOC);

      //hacemos la sentencia de sql 
    
      if ($result != 0) {
        if ($estado == 2) {
          $sqlUpdate = 'UPDATE  evaluacion SET Estado=? WHERE IdEvaluacion=?';
          $queryUpdate = $pdo->prepare($sqlUpdate);
          $resultInsert = $queryUpdate->execute(array( $estado, $idevaluacion));
          $accion = 2;
                } else {
                  $sqlUpdate = 'UPDATE  evaluacion SET Estado=? WHERE IdEvaluacion=?';
                  $queryUpdate = $pdo->prepare($sqlUpdate);
                  $resultInsert = $queryUpdate->execute(array( $estado, $idevaluacion));
                  $accion = 1;
              }
         
           
    }
    
   
    if ($resultInsert > 0) {
      if ($accion == 1) {
          $respuesta = array('status' => true, 'msg' => 'Alumno acreditado');
      } else {
    $respuesta = array('status' => true, 'msg' => 'Alumno no acreditado ');
  }
  }


    }

       
   echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);   
 }