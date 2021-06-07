<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
require 'includes/funciones.php';
incluirTemplate('headerh');
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';

$idUsuario=$_SESSION['id'];
$sql= 'SELECT enfermedades.IdEnfermedad , historialme.IdHistorialM , usuario.IdUsuario FROM enfermedades RIGHT JOIN historialme ON enfermedades.IdHistorialM= historialme.IdHistorialM RIGHT JOIN usuario ON historialme.IdUsuario = usuario.IdUsuario WHERE usuario.IdUsuario=?';
$query= $pdo->prepare($sql);
$query->execute(array($idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($consulta); $i++) {
  $idHistorial = $consulta[$i]['IdHistorialM'];
  $idEnfermedad = $consulta[$i]['IdEnfermedad'];
}

if($idHistorial == null && $idEnfermedad ==null){

echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted debe de llenar primero el apartado de historial medico.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/historial.php">Llenar historial</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
}elseif ($idHistorial != null && $idEnfermedad ==null) {
  echo '<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Enfermedades</h2>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <div class="center-form">
        <div class="col-lg-4 mt-lg-0 ">
          <!--  -->
          <form action=" " onsubmit="return validar()"  role="form" class="form">
                       <!-- diabetes, hipertencion, artritis o una enfermedad en los riñones? -->
            <!-- <div class="form-group" >
              <label class="control-label">¿Tienes alguna de las siguientes enfermedades? </label> <br>
                <ul>
                  <li>Asma</li>
                  <li>Diabetes</li>
                  <li>Hipertencion</li>
                  <li>Artritis</li>
                  <li>Miocardiopatía hipertrófica</li>
                  <li>Síndrome de Brugada</li>
                  <li>Síndrome del QT largo</li>
                  <li>Commotio Cordis</li>
                  <li>Ninguna</li>
                </ul>
            </div> -->
            <div class="form-group">
                        <label for="control-label">¿Tienes alguna de las siguientes enfermedades?</label>
                            <select class="form-control"  id="enfermedad" name="enfermedad" >
                                <option value="Asma">Asma</option>
                                <option value="Diabetes">Diabetes</option>
                                <option value="Hipertencion">Hipertencion</option>
                                <option value="Artritis">Artritis</option>
                                <option value="Miocardiopatía hipertrófica">Miocardiopatía hipertrófica</option>
                                <option value="Síndrome de Brugada">Síndrome de Brugada</option>
                                <option value="Síndrome del QT largo">Síndrome del QT largo</option>
                                <option value="Commotio Cordis">Commotio Cordis</option>
                                <option value="Ninguna">Ninguna</option>
                                
                              
                            </select>
                            
              </div>
            <!-- <div class=" form-group">
              <label class="control-label">¿Cual enfermedad pacedes?</label>
              <input type="text" class="form-control" name="enfermedad" id="enfermedad"   />
             
            </div> -->

            <!-- <div id="penfer"> </div> <br> -->

            <div id="message"></div>


            
            <div class="text-center "><button id="genfermedad" class="get-started-btn btn"  type="button">Guardar</button></div><br>
            
          </form>


        </div>

      </div>

    </div>
 </section><!-- End Contact Section -->



</main><!-- End #main -->';

}elseif ($idHistorial != null && $idEnfermedad !=null) {
  echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted debe de llenar el apartado de tutor.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/tutor.php">Tutor</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
}


incluirTemplate('footerh');
?>

<?php

?>
