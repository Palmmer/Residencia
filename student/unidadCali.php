<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>
  <link href="css/tablas.css" rel="stylesheet">
<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2> Boleta </h2>
    </div>

  </div><!-- End Breadcrumbs -->

    <!-- Tabla Peticiones -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableCali">
                            <thead>
                                <tr>
                                    
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