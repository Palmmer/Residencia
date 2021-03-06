<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
require 'includes/funciones.php';

require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';

$idUsuario=$_SESSION['id'];
$sql= 'SELECT historialme.IdHistorialM , lesion.IdLesion , estudio.IdEstudio, enfermedades.IdEnfermedad, tutor.IdTutor , usuario.IdUsuario FROM historialme LEFT JOIN lesion ON historialme.IdHistorialM= lesion.IdHistorialM LEFT JOIN estudio ON lesion.IdHistorialM = estudio.IdHistorialM LEFT JOIN enfermedades ON estudio.IdHistorialM = enfermedades.IdHistorialM RIGHT JOIN usuario ON historialme.IdUsuario = usuario.IdUsuario LEFT JOIN tutor ON usuario.IdUsuario = tutor.IdUsuario WHERE usuario.IdUsuario= ?';
$query= $pdo->prepare($sql);
$query->execute(array($idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($consulta); $i++) {
     
     $idHistorial = $consulta[$i]['IdHistorialM'];
     $idLesion = $consulta[$i]['IdLesion'];
     $idEstudio = $consulta[$i]['IdEstudio'];
     $idEnfermedad = $consulta[$i]['IdEnfermedad'];
     $idTutor = $consulta[$i]['IdTutor'];
  
}

if($idHistorial != null && $idLesion != null && $idEstudio != null && $idEnfermedad != null && $idTutor!= null){
  incluirTemplate('header', $inicio = true, $login = true);
    echo '
    
    <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gimnasia Artistica Femenina</h2>
          <p>Acerca de nosotros:</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../assets/img/SALTO.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>La Gimnasia Artística Femenina es la modalidad gimnástico-deportiva prácticada por el género femenino.</h3>
            <p class="font-italic">
              Es la segunda modalidad en competirse en los Juegos Olímpicos Modernos, surge como un derivado de la Gimnasia Artística Femenina, tiene diferentes eventos. Con respecto a las gimnastas femeninas se encuentran los siguientes eventos:
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Salto de caballo.</li>
              <li><i class="icofont-check-circled"></i> Barras asimétricas.</li>
              <li><i class="icofont-check-circled"></i> Viga de equilibrio.</li>
              <li><i class="icofont-check-circled"></i> Manos libres.</li>
            </ul>
            <p>
              La gimnasia ha formado parte del programa deportivo de los Juegos Olímpicos de la era moderna desde que éstos empezaron en 1896.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Porque practicar la Gimnasia Artistica?</h3>
              <p>
                Se considera uno de los deportes fundamentales para el desarrollo de las destrezas y habilidades básicas del individuo. Entre los principales beneficios que ofrece la práctica de este deporte tenemos:
              </p>

            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-user-shield"></i>
                    <h4>Autoestima</h4>
                    <p>Practicar gimnasia ayuda a desarrollar la confianza en sí mismo.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-female"></i>
                    <h4>Postura</h4>
                    <p>La práctica de la gimnasia corrige la postura corporal.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="far fa-grin-beam"></i>
                    <h4>Estabilidad Emocional</h4>
                    <p>La práctica de la gimnasia ayuda a desarrollar la estabilidad emocional, la cual viene dada por la concentración, velocidad de reflejos y seguridad que debe preceder a cada actuación.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cursos</h2>
          <p>Cursos Populares</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="../assets/img/salto2.gif" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Salto</h4>
                  <p class="price">--</p>
                </div>

                <h3>Salto de Caballo</h3>
                <p>Este evento se coloca en forma lateral para la ejecución del salto desde la tabla de impulso, vuelo de entrada, apoyo pasajero de una o dos manos, repulsión, vuelo de salida y llegada a la posición de firmes.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                                    
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="../assets/img/barras.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Barras</h4>
                  <p class="price">--</p>
                </div>

                <h3>Barras Asimetricas</h3>
                <p>En este evento se realizan ejercicios únicamente de vuelo y presentándose posiciones estéticas pasajeras, la gimnasta debe de realizar movimientos en ambas barras y cuya combinación sea elegante y armoniosa.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                  
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="../assets/img/manos-libres.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Manos</h4>
                  <p class="price">--</p>
                </div>

                <h3>Manos Libres</h3>
                <p>El ejercicio está constituido en un conjunto armonioso de movimientos que entrelazan posiciones de equilibrio, volteos y saltos, agrupados a un patrón rítmico con fondo musical.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    
  </main><!-- End #main -->';
  incluirTemplate('footer');
  }else {
    incluirTemplate('headerh');
  echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted debe llenar el historial medico.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/historial.php">HISTORIAL</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
  incluirTemplate('footerh');
    
  }

?>

<!-- ======= Login ======= -->
	<!-- <?php //include '../login.php';?> -->
<!-- End Login -->



  <?php

?>