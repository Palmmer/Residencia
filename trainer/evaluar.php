<?php
require_once 'includes/modals/modalEvaluar.php';
require 'includes/funciones.php';
incluirTemplate('header');
?>
  <link href="css/tablas.css" rel="stylesheet">
<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2> Evaluar  </h2>
    </div>
    <!-- <button class="btn btn-primary " type="button" onclick="openModalagendar()">Agendar Videollamada</button> -->
  </div><!-- End Breadcrumbs -->

    <!-- Tabla Peticiones -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableEvaluar">
                            <thead>
                                <tr>
                                    <th>Acciones</th>
                                    <th>Alumno</th>
                                     <th>Unidad</th>
                                    <th>Estado</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- End tabla peticiones -->

</main><!-- End #main -->
<?php
incluirTemplate('footer');
?>