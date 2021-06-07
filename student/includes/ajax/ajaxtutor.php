<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php'; 
     // contectamos con la base de datos   
        require 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';

     if (!empty($_POST)) {
        if (empty($_POST['nombret'])|| empty($_POST['apellidopt']) || empty($_POST['apellidomt']) || empty($_POST['fechat']) || empty($_POST['emailt']) || empty($_POST['telefonot'])|| empty($_POST['parentesco']) ) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       Completa todos los campos.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
        } else {
     // recuperamos las variables

 // recuperamos las variables
 $nombret=filter_var($_POST['nombret'], FILTER_SANITIZE_STRING);
 $apellidopt=filter_var($_POST['apellidopt'], FILTER_SANITIZE_STRING);
 $apellidomt=filter_var($_POST['apellidomt'], FILTER_SANITIZE_STRING);
 $fechat=filter_var($_POST['fechat'], FILTER_SANITIZE_STRING);
 $emailt=filter_var($_POST['emailt'], FILTER_SANITIZE_EMAIL);
 $telefonot=filter_var($_POST['telefonot'], FILTER_SANITIZE_NUMBER_INT);
 $parentesco=filter_var($_POST['parentesco'], FILTER_SANITIZE_STRING);
 $IdUsuario=$_SESSION['id'];

 //hacemos la sentencia de sql
 $sqlInsert = "INSERT INTO tutor (Nombre, ApelidoP, ApellidoM, FechaNacimiento, Email, Telefono, Parentesco, IdUsuario) VALUES(?,?,?,?,?,?,?,?)";
            $queryInsert = $pdo->prepare($sqlInsert);
            $resultInsert = $queryInsert->execute(array($nombret, $apellidopt, $apellidomt, $fechat, $emailt, $telefonot, $parentesco,$IdUsuario));


            if ($resultInsert) {
                echo '<div class="alert alert-dismissible alert-success">
        <button class="close"  type="button" data-dismiss="alert"  >×</button><strong>Registro con exito.</strong><a class="alert-link"  ></a>
      </div>';
    
      
            } else {
                echo '<div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Error al realizar el registro.</strong><a class="alert-link" ></a>
              </div>';
            }

        }
    }
