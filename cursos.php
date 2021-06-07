<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Cursos</h2>
      <p>Pone a tu disposición una serie de cursos de gimnasia artística, donde podrás desarrollar tu habilidad artistica con ejercicios basicos y seguros desde tu casa. </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Courses Section ======= -->
  <section id="courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="assets/img/salto2.gif" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Salto</h4>
                <p class="price">--</p>
              </div>

              <h3><a href="detalles-salto.php">Salto de Caballo/Potro</a></h3>
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
  </section><!-- End Courses Section -->

</main><!-- End #main -->
<?php
incluirTemplate('footer');
?>