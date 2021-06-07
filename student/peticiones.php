<?php
// require_once 'includes/modals/modalhisto.php';
// require_once 'includes/modals/modaltutor.php';
require_once 'includes/modals/modalSolicitar.php';
require 'includes/funciones.php';
incluirTemplate('header');
?>
  <link href="css/tablas.css" rel="stylesheet">
<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2> Videollamada </h2>
    </div>
    <button class="btn btn-primary " type="button" onclick="openModalsolicitar()">Solicitar Videollamada</button>
  </div><!-- End Breadcrumbs -->

    <!-- Tabla Peticiones -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tablePeticiones">
                            <thead>
                                <tr>
                                    
                                    <th>Unidad</th>
                                    <th>Videollamada</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
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