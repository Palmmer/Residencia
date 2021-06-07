<?php
// Con esto se pueden hacer variables de session
session_start();

if (!empty($_POST)) {
  if (empty($_POST['email']) || empty($_POST['password'])) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   Completa todos los campos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  } else {
    require '../config/database.php';
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    //arreglar la consulta del inner 
    $sql = 'SELECT * FROM usuario  as u INNER JOIN  rol as r ON u.IdRol = r.IdRol WHERE u.Email =?';
    $query = $pdo->prepare($sql);
    $query->execute(array($email));
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($query->rowCount() > 0) {
      if (password_verify($password, $result['Clave'])) {

        if ($result['descripcion'] == "Entrenador") {
          $_SESSION['id']=$result['IdUsuario'];
         $_SESSION['nombre']=$result['Nombre'];
          $_SESSION['active']=true;
          echo '<div class="alert alert-dismissible alert-success"><strong>Entrenador</strong></div>';
        } else {
          $_SESSION['id']=$result['IdUsuario'];
          $_SESSION['nombre']=$result['Nombre'];
          $_SESSION['activeP']=true;
          echo '<div class="alert alert-dismissible alert-success"><strong>Alumno</strong></div>';
        }
      } else {
        echo '<div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">×</button><strong>Contraseña incorrecta.</strong><a class="alert-link" href="#"></a>
          </div>';
      }
    } else {
      echo
      '<div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">×</button><strong>Correo incorrecto.</strong><a class="alert-link" href="#"></a>
          </div>';
    }
  }
}
