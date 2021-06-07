<?php
    // mandar llamar session_start();
    require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';
     // contectamos con la base de datos   
        require 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

     if (!empty($_POST)) {
        if (empty($_POST['estatura']) || empty($_POST['peso']) || empty($_POST['sexo'])  ) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Completa todos los campos.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
        } else {
     // recuperamos las variables
 // recuperamos las variables
 $estatura=filter_var($_POST['estatura'], FILTER_SANITIZE_STRING);
 $peso=filter_var($_POST['peso'], FILTER_SANITIZE_NUMBER_INT);
 $sexo=filter_var($_POST['sexo'], FILTER_SANITIZE_STRING);
 $ncirugia=filter_var($_POST['ncirugia'], FILTER_SANITIZE_STRING);
 $IdUsuario=$_SESSION['id'];

 //hacemos la sentencia de sql
 $sqlInsert = "INSERT INTO historialme (Estatura, Peso, Sexo, Cirugias, IdUsuario) VALUES(?,?,?,?,?)";
            $queryInsert = $pdo->prepare($sqlInsert);
            $resultInsert = $queryInsert->execute(array($estatura,$peso,$sexo,$ncirugia,$IdUsuario));


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

        }
    }
