<?php

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Contactanos</h2>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.8948554068074!2d-116.9885517308204!3d32.528955058798715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d94875d6e6b3d5%3A0x12c528793fc3f572!2sInstituto%20Tecnol%C3%B3gico%20de%20Tijuana!5e0!3m2!1sen!2smx!4v1607658371778!5m2!1sen!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Ubicacion:</h4>
              <p>Calz del Tecnológico s/n, Tomas Aquino, 22414 Tijuana, B.C.</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Correo electronico:</h4>
              <p>webmaster@tijuana.tecnm.mx</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Pagina web:</h4>
              <p>https://www.tijuana.tecnm.mx/</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Comunicate al:</h4>
              <p>+52 664 607 84 00</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:3" data-msg="Por favor ingresa minimo 3 letras" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" data-rule="email" data-msg="Por favor ingresa un correo electronico valido" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:8" data-msg="Por favor ingresa minimo 8 letras" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Cargando...</div>
              <div class="error-message"></div>
              <div class="sent-message">Su mensaje fue enviado. Gracias!</div>
            </div>
            <div class="text-center"><button class="get-started-btn btn" type="submit">Enviar mensaje</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
</main>
<?php
incluirTemplate('footer');
?>