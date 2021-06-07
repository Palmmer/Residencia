<?php

session_start();
if (!empty($_SESSION['active'])) {
    header('Location:trainer/');
} else if (!empty($_SESSION['activeP'])) {
    header('Location:student/');
} 

require 'includes/funciones.php';
incluirTemplate('header', $inicio = true, $login = true);

?>
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
          <img src="assets/img/SALTO.jpg" class="img-fluid" alt="">
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
          <a href="about.php" class="learn-more-btn">Aprende mas</a>
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
            <!-- <div class="text-center">
                <a href="about.html" class="more-btn">Aprende mas <i class="bx bx-chevron-right"></i></a>
              </div> -->
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
            <img src="assets/img/salto2.gif" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Salto</h4>
                <p class="price">--</p>
              </div>

              <h3><a href="detalles-salto.php">Salto de Caballo</a></h3>
              <p>Este evento se coloca en forma lateral para la ejecución del salto desde la tabla de impulso, vuelo de entrada, apoyo pasajero de una o dos manos, repulsión, vuelo de salida y llegada a la posición de firmes.</p>
              <div class="trainer d-flex justify-content-between align-items-center">

              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="course-item">
            <img src="assets/img/barras.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Barras</h4>
                <p class="price">--</p>
              </div>

              <h3><a href="detalles-barras.php">Barras Asimetricas</a></h3>
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
            <img src="assets/img/manos-libres.jpg" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Manos</h4>
                <p class="price">--</p>
              </div>

              <h3><a href="detalles-manos.php">Manos Libres</a></h3>
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


</main><!-- End #main -->
<?php
incluirTemplate('footer');
?>