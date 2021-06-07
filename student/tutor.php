<?php

require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
require 'includes/funciones.php';
incluirTemplate('headerh');
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';

$idUsuario=$_SESSION['id'];
$sql= 'SELECT tutor.IdTutor ,  usuario.IdUsuario FROM tutor RIGHT JOIN usuario ON tutor.IdUsuario= usuario.IdUsuario WHERE usuario.IdUsuario=?';
$query= $pdo->prepare($sql);
$query->execute(array($idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($consulta); $i++) {
  $idTutor = $consulta[$i]['IdTutor'];
}

if($idUsuario == null && $idTutor ==null){

echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted debe de llenar primero el apartado de historial medico.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/historial.php">Llenar historial</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
}elseif ($idUsuario != null && $idTutor ==null) {
  echo '<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Informacion de tu tutor</h2>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">


<div class="container" data-aos="fade-up">

      <div class="center-form">
        <div class="col-lg-4 mt-lg-0 ">
          <!--  -->
          <form action=" " method="post" role="form" class="form">
            
            <div class=" form-group">
              <label class="control-label">¿Cual es el nombre tu tutor?</label>
              <input type="text" class="form-control" name="nombret" id="nombret"  />
              
            </div>

            <div class=" form-group">
              <label class="control-label">¿Cual es el apellido paterno de tu tutor?</label>
              <input type="text" class="form-control" name="apellidopt" id="apellidopt"  />
              
            </div>
            <div class=" form-group">
              <label class="control-label">¿Cual es el apellido materno de tu tutor?</label>
              <input type="text" class="form-control" name="apellidomt" id="apellidomt"  />
              
            </div>

            <div class=" form-group">
                <label class="control-label">Fecha de Nacimiento de tu tutor</label>
                 <input type="date" class="form-control" name="fechat" id="fechat" />

            </div>

            <div class=" form-group">
                            
             <label class="control-label">Correo Electronico de tu tutor</label>
                 <input type="email" name="emailt" class="form-control" id="emailt" />

            </div>

            <div class=" form-group">
                <label class="control-label">¿Cual es el numero de telefono de tu tutor?</label>
                 <input type="number" class="form-control" name="telefonot" id="telefonot" />

            </div>

            <div class=" form-group">
                <label class="control-label">¿Cual es el parentesco que tienes con tu tutor?</label>
                 <input type="text" class="form-control" name="parentesco" id="parentesco" />

            </div>

         


             
            <div id="message"></div>

          
            <!-- class="get-started-btn btn" -->
            <div class="text-center "><button id="gtutor"  class="get-started-btn btn"  type="button">Guardar</button></div><br>
           
          </form>


    </div>

  </div>

</div>

</div>
</section><!-- End Contact Section -->



</main><!-- End #main -->';

}elseif ($idUsuario != null && $idTutor !=null) {
  echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted ya lleno este apartado.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/index.php">Inicio</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
}


incluirTemplate('footerh');
?>

<?php

?>