<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>UNIDAD 5 - Nivel Avanzado</h2>
      <p> En esta unidad se evaluara a la gimnasta de acuerdo al contenido aprendido en las lecciones pasadas. Tiene como objetivo poder observar a distancia, por medio de video como la gimnasta realiza las actividades que el entrenador (a) le proporcionara.</p>
      <h3 style="color: #B22222;"> <b> REALIZAR LAS ACTIVIDADES UNICAMENTE BAJO LA SUPERVISION DE UN ADULTO </b> </h3>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gimnasia Artistica Femenina</h2>
        <p>Evaluacion Unidad 5:</p>
      </div>

      <div class="row">
        <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>La Gimnasia Artística Femenina es la modalidad gimnástico-deportiva prácticada por el género femenino.</h3>
          <p>
            En esta tercera evaluacion la gimnasta debera practicar algunos de los ejercicios vistos anteriormente. Estos ejercicios seran brindados por el entrenador de la gimnasta, sin embargo, debe practicarse unicamente bajo la supervision de un adulto.
          </p>
          <p>
            El entrenador no debera aplicar ejercicios dificiles, en el cual la gimnasta no pueda representarlos desde casa. Algunos de los ejercicios aceptados son los siguientes:
          </p>

          <ul>
            <li><i class="icofont-check-circled"></i> Barras Asimetricas</li>
            
          </ul>
        </div>
      </div>

    </div>

    <div class="row" style="margin-left: 45%;">
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-btn">
          <button class="get-started-btn" type="button" ><a href="/student/peticiones.php">Solicitar Videollamada.</a>
              <i class="fa fa-barcode"></i>
            </button>
          </span>
        </div> <!-- /input-group -->
      </div> <!-- /.col-lg-6 -->
    </div> <!-- /.row -->

    <div class="modal" id="livestream_scanner">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Examen 3 - </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="position: static;">
            <video autoplay="true" id="interactive-video" class="interactive-video"></video>
          </div>
          <div class="modal-footer">
            <button type="button" class="get-started-btn" data-dismiss="modal">Close</button>
          </div>
        </div> <!-- /.modal-content -->
      </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
  </section>



</main><!-- End #main -->

<?php
incluirTemplate('footer');
?>

<script type="text/javascript">
  $('#livestream_scanner').on('shown.bs.modal', function(e) {
    var video = document.querySelector("#interactive-video");
    if (navigator.mediaDevices.getUserMedia) {
      navigator.mediaDevices.getUserMedia({
          video: true
        })
        .then(function(stream) {
          video.srcObject = stream;
        })
        .catch(function(error) {
          console.log("Something went wrong!");
        });
    }
  });
</script>