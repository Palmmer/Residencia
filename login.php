<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('Location:trainer/');
} else if (!empty($_SESSION['activeP'])) {
    header('Location:student/');
} 
require 'includes/funciones.php';
incluirTemplate('header', $inicio = false, $login = false);
?>


<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Iniciar Sesion</h2>

  </div>
</div><!-- End Breadcrumbs -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="center-form">
      <div class="col-lg-4 mt-lg-0 ">
        <form action="" role="form" class="form" onsubmit="return validar()">
          <div class="form-group">
            <label class="control-label">Correo Electronico</label>
            <input type="email" name="email" class="form-control" id="email" />
          </div>
          <div class=" form-group">
            <label class="control-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" />
          </div>
          <div id="message"></div>
          <div class="text-center ">
            <div class="text-center"><button class="get-started-btn btn" type="button" id="login">Iniciar Sesion</button></div>
          </div>
      </div>
    </div>
    </form>
  </div>
  </div>
  <div class="mt-4">
    <div class="d-flex justify-content-center links custom-control">
      No tienes cuenta? <a href="registro.php" class="ml-2">Registrate</a>
    </div>
  </div>
  </div>
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
<?php
incluirTemplate('footer');
?>