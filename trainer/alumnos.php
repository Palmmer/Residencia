<?php
require_once 'includes/modals/modalhisto.php';
require_once 'includes/modals/modaltutor.php';

require 'includes/funciones.php';
incluirTemplate('header');
?>
  <link href="css/tablas.css" rel="stylesheet">
<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Alumnos</h2>
    </div>
  </div><!-- End Breadcrumbs -->

    <!-- Tabla Alumnos -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="tableAlumnos">
                            <thead>
                                <tr>
                                    <th>Acciones</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Email</th>
                                    <th>Ciudad</th>
                                    <th>Direccion</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- End tabla alumnos -->

</main><!-- End #main -->
<?php
incluirTemplate('footer');
?>