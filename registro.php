<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('Location:trainer/');
} else if (!empty($_SESSION['activeP'])) {
    header('Location:student/');
} 
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Registro</h2>

        </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="center-form">
                <div class="col-lg-8 mt-lg-0">
                    <form action="" onsubmit="return validar()" role="form" class="form">
                        <div class="form-row">
                            <div class="col-sm form-group">
                                <label class="control-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" />
                            </div>
                            <div class="col-sm form-group">
                                <label class="control-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="apellidoP" id="apellidoP" />

                            </div>
                            <div class="col-sm  form-group">
                                <label class="control-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="apellidoM" id="apellidoM" />

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm form-group">
                                <label class="control-label">Correo Electronico</label>
                                <input type="email" name="email" class="form-control" id="email" />

                            </div>
                            <div class="col-sm form-group">
                                <label class="control-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fecha" id="fecha" />

                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-sm form-group">
                                 <label class="control-label">Ciudad</label>
                                <input type="text" name="ciudad" class="form-control" id="ciudad" />

                            </div>
                            <div class="col-sm form-group">
                                <label class="control-label">Asociacion</label>
                                <input type="text" name="asociacion" class="form-control" id="asociacion" />

                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-sm form-group">
                                <label class="control-label">Direccion</label>
                                <input type="text" name="direccion" class="form-control" id="direccion" />

                            </div>
                           

                        </div>


                        <div class="form-row">
                            <div class="col-sm form-group">
                                <label class="control-label">Tipo de Usuario</label>
                                <select class="form-control" id="rol" name="rol">
                                    <option value="1">Entrenador</option>
                                    <option value="2">Estudiante</option>
                                </select>
                            </div>
                            <div class="col-sm form-group">
                                <label class="control-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" id="password" />
                            </div>
                        </div>
                        <div id="message"></div>
                        <div class="text-center">
                            <button id="register" class="get-started-btn btn" type="button">Registrarme</button>

                        </div>
                    </form>

                </div>


            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-center links custom-control">
                    Ya tienes cuenta? <a href="login.php" class="ml-2">Inicia Sesion</a>
                </div>
            </div>
        </div>

        </div>
    </section><!-- End Contact Section -->




</main><!-- End #main -->
<?php
incluirTemplate('footer');
?>