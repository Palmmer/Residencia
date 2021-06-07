<?php

require '../config/database.php';

if (!empty($_POST)) {
    if (empty($_POST['nombre']) || empty($_POST['apellidoP']) || empty($_POST['apellidoM']) || empty($_POST['email']) || empty($_POST['ciudad']) || empty($_POST['direccion'])|| empty($_POST['password']) || empty($_POST['rol']) || empty($_POST['fecha'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   Completa todos los campos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    } else {
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        $apelllidop = filter_var($_POST['apellidoP'], FILTER_SANITIZE_STRING);
        $apelllidom = filter_var($_POST['apellidoM'], FILTER_SANITIZE_STRING);
        $fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $ciudad = filter_var($_POST['ciudad'], FILTER_SANITIZE_EMAIL);
        $asociacion = filter_var($_POST['asociacion'], FILTER_SANITIZE_EMAIL);
        $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $rol = filter_var($_POST['rol'], FILTER_SANITIZE_NUMBER_INT);


        //validaciones
        // $validacioncorreo = preg_match('/^([a-z]+.+[a-z]+([0-9]+[0-9])*@tectijuana.edu.mx+$|^[a-z]+.+[a-z]+([0-9]+[0-9])*@tectijuana.mx+$)/', $correo);
        // $validacionNombre = preg_match('/(^[A-Z]+[a-z]+$|^[A-Z]+[a-z]+\s+[A-Z]+[a-z]+$)/', $nombre);
        // $validacionApellidop = preg_match('/^[A-Z]+[a-z]+$/', $apelllidop);
        // $validacionApellidom = preg_match('/^[A-Z]+[a-z]+$/', $apelllidom);
        // $validacionNcontrol = preg_match('/^[0-9]{8}+$/', $ncontrol);
        // $validacionTelefono = preg_match('/(^[0-9]{10})+$/', $tel);
        // $validacionSemestre = preg_match('/^[0-9]+$/', $semestre);
        // $validacionContra = preg_match('/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/', $clave);
        // if (!$validacionNombre) {
        //     echo '<div class="alert alert-dismissible alert-danger">
        //   <button class="close" type="button" data-dismiss="alert">×</button><a class="alert-link"></a>Nombre Invalido</div>';
        // } elseif (!$validacionApellidop) {
        //     echo '<div class="alert alert-dismissible alert-danger">
        //   <button class="close" type="button" data-dismiss="alert">×</button><a class="alert-link"></a>Apellido Invalido</div>';
        // } elseif (!$validacionApellidom) {
        //     echo '<div class="alert alert-dismissible alert-danger">
        //   <button class="close" type="button" data-dismiss="alert">×</button><a class="alert-link"></a>Apellido Invalido</div>';
        // } elseif (!$validacionNcontrol) {
        //     echo '<div class="alert alert-dismissible alert-danger">
        //   <button class="close" type="button" data-dismiss="alert">×</button><a class="alert-link"></a>Numero de control Invalido</div>';
        // } elseif (!$validacionSemestre) {
        //     echo '<div class="alert alert-dismissible alert-danger">
        //   <button class="close" type="button" data-dismiss="alert">×</button><a class="alert-link"></a>Seleccione un semestre</div>';
        // } elseif (!$validacioncorreo) {
        //     echo '<div class="alert alert-dismissible alert-danger">
        //   <button class="close" type="button" data-dismiss="alert">×</button><a class="alert-link"></a>Correo Invalido</div>';
        // } elseif (!$validacionTelefono) {
        //     echo '<div class="alert alert-dismissible alert-danger">
        //   <button class="close" type="button" data-dismiss="alert">×</button><a class="alert-link"></a>Telefono Invalido</div>';
        // } elseif (!$validacionContra) {
        //     echo '<div class="alert alert-dismissible alert-danger">
        //   <button class="close" type="button" data-dismiss="alert">×</button><a class="alert-link"></a>Contraseña debe ser de 8 a 16 caracteres.
        //   Debe incluir una mayuscula y  1 numero</div>';
        // } else 

        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = 'SELECT * FROM usuario WHERE Email =?';
        $query = $pdo->prepare($sql);
        $query->execute(array($email));
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result > 0) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   El correo ya existe.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        } else {

            $sqlInsert = "INSERT INTO usuario (Nombre,ApellidoP,ApellidoM,FechaNacimiento,Email,Clave,Ciudad,Asociacion,Direccion,IdRol) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $queryInsert = $pdo->prepare($sqlInsert);
            $resultInsert = $queryInsert->execute(array($nombre, $apelllidop, $apelllidom, $fecha, $email, $password,$ciudad,$asociacion,$direccion, $rol));


            if ($resultInsert) {
                echo '<div class="alert alert-dismissible alert-success">
        <button class="close" type="button" data-dismiss="alert">×</button><strong>Registro con exito.</strong><a class="alert-link" ></a>
      </div>';
            } else {
                echo '<div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button><strong>Error al realizar el registro.</strong><a class="alert-link" ></a>
              </div>';
            }
        }
    }
}
