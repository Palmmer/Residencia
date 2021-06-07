<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
require 'includes/funciones.php';
incluirTemplate('header');
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\trainer\includes\templates\sesiones.php';


$idUsuario=$_SESSION['id'];
$sql= 'SELECT  concat(usuario.Nombre," ",usuario.ApellidoP," ",usuario.ApellidoM) as nombremaestro, usuario.*
FROM usuario WHERE IdUsuario=?';
$query= $pdo->prepare($sql);
$query->execute(array($idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);

for($i = 0; $i < count($consulta); $i++){
    $nombre_maestro = $consulta[$i]['nombremaestro'];
    $fecha = $consulta[$i]['FechaNacimiento'];
    $email = $consulta[$i]['Email'];
    $ciudad = $consulta[$i]['Ciudad'];
    $asociacion = $consulta[$i]['Asociacion'];
    $direccion = $consulta[$i]['Direccion'];
}

echo'<main id="main" data-aos="fade-in">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
    <h2>Perfil</h2>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">


  <div class="container" data-aos="fade-up">

    <div class="center-form">
      <div class="col-lg-4 mt-lg-0 ">
        <!--  -->
       <div class="form-group">
      
    <label for="control-label" >Nombre: '.$nombre_maestro.' <a></a> </label>
  
  </div>
  <div class="form-group">
     
    <label for="control-label" >Fecha de nacimiento: '.$fecha.' <a ></a> </label>
   
  </div>
  <div class="form-group">
    
    <label for="control-label" >Email: '.$email.' <a ></a> </label>
   
  </div>
  <div class="form-group">
   
    <label for="control-label" >Ciudad: '.$ciudad.' <a ></a> </label>
  
  </div>
  <div class="form-group">
     
  <label for="control-label" >Asociacion: '.$asociacion.'<a ></a> </label>
</div>
  <div class="form-group">
     
    <label for="control-label" >Direccion: '.$direccion.'<a ></a> </label>
  </div>


      </div>

    </div>

  </div>
 </section><!-- End Contact Section -->



</main><!-- End #main -->';
?>


<?php
incluirTemplate('footer');
?>