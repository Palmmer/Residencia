<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';
     // contectamos con la base de datos   
        require 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

 
     // recuperamos las variables
     $idUsuario=$_SESSION['id'];
$sql= 'SELECT IdHistorialM FROM historialme WHERE IdUsuario =?';
$query= $pdo->prepare($sql);
$query->execute(array($idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);

for($i = 0; $i < count($consulta); $i++){
    $idhistorial = $consulta[$i]['IdHistorialM'];

}
 // recuperamos las variables
 $nlesion=filter_var($_POST['nlesion'], FILTER_SANITIZE_STRING);
 $fechalesion=filter_var($_POST['fechalesion'], FILTER_SANITIZE_STRING);
 $rehabilitacion=filter_var($_POST['rehabilitacion'], FILTER_SANITIZE_STRING);
 $tiempoRehabilitacion=filter_var($_POST['tiempoRehabilitacion'], FILTER_SANITIZE_STRING);


 //hacemos la sentencia de sql
 $sqlInsert = "INSERT INTO lesion (Nombre, FechaLesion, Rehabilitacion, TiempoRehabili, IdHistorialM) VALUES(?,?,?,?,?)";
            $queryInsert = $pdo->prepare($sqlInsert);
            $resultInsert = $queryInsert->execute(array($nlesion,$fechalesion,$rehabilitacion,$tiempoRehabilitacion,$idhistorial));


            if ($resultInsert) {
                echo '<div class="alert alert-dismissible alert-success">
        <button class="close"  type="button" data-dismiss="alert"  >×</button><strong>Registro con exito.</strong><a class="alert-link"  ></a>
      </div>';
    
      // header('Location:../../enfermedad.php');
            } else {
                echo '<div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Error al realizar el registro.</strong><a class="alert-link" ></a>
              </div>';
            }
?>
       
  