<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
require 'includes/funciones.php';
incluirTemplate('headerh');
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';

$idUsuario=$_SESSION['id'];
$sql= 'SELECT estudio.IdEstudio , historialme.IdHistorialM , usuario.IdUsuario FROM estudio RIGHT JOIN historialme ON estudio.IdHistorialM= historialme.IdHistorialM RIGHT JOIN usuario ON historialme.IdUsuario = usuario.IdUsuario WHERE usuario.IdUsuario=?';
$query= $pdo->prepare($sql);
$query->execute(array($idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($consulta); $i++) {
  $idHistorial = $consulta[$i]['IdHistorialM'];
  $idEstudio = $consulta[$i]['IdEstudio'];
}

if($idHistorial == null && $idEstudio ==null){

echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted debe de llenar primero el apartado de historial medico.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/historial.php">Llenar historial</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
}elseif ($idHistorial != null && $idEstudio ==null) {
  echo '<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Estudios</h2>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">


<div class="container" data-aos="fade-up">

      <div class="center-form">
        <div class="col-lg-4 mt-lg-0 ">
          <!--  -->
          <form action=" " onsubmit="return validar()" role="form" class="form">
            
            <div class=" form-group">
              <label class="control-label">¿Cual es tu grado academico?</label>
              <input type="text" class="form-control" name="estudio" id="estudio" placeholder="Primaria"  />
             
            </div>
            <div id="message"></div>

          

            
            <div class="text-center "><button id="gestudio" class="get-started-btn btn"  type="button">Guardar</button></div><br>
            
          </form>


    </div>

  </div>

</div>

</div>
</section><!-- End Contact Section -->



</main><!-- End #main -->';

}elseif ($idHistorial != null && $idEstudio !=null) {
  echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted debe de llenar el apartado de enfermedad.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/enfermedad.php">Enfermedad</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
}


incluirTemplate('footerh');
?>

<?php

?>