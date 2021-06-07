<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php'; 
     // contectamos con la base de datos   
        require 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

     if (!empty($_POST)) {
        if (empty($_POST['enfermedad'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Completa todos los campos.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    
        } else {
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
 $enfermedad=filter_var($_POST['enfermedad'], FILTER_SANITIZE_STRING);


 //hacemos la sentencia de sql
 $sqlInsert = "INSERT INTO enfermedades (Descripcion, IdHistorialM) VALUES(?,?)";
            $queryInsert = $pdo->prepare($sqlInsert);
            $resultInsert = $queryInsert->execute(array($enfermedad, $idhistorial));


            if ($resultInsert) {
                echo '<div class="alert alert-dismissible alert-success">
        <button class="close"  type="button" data-dismiss="alert">×</button><strong>Registro con exito.</strong><a class="alert-link" ></a>
      </div>';
    //   header('Location:../../enfermedad.php');
            } else {
                echo '<div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Llena los campos correspondientes.</strong><a class="alert-link" ></a>
              </div>';
            }
          //   if ($resultInsert) {
          //      header('Location:../../enfermedad.php');
          // }
        }
    }
