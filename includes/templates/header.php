<!DOCTYPE html>
<html>

<head>
    <title>GIMNASIA ARTISTICA</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/calendar.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
    <?php $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    ?>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.php">Gimnasia Artistica</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="about.php">Acerca de</a></li>
                    <li><a href="cursos.php">Cursos</a></li>
                    <li><a href="auxilios.php">Auxilios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            <!-- Button trigger modal -->
            <?php if ($login !== false) : ?>
                <a class="get-started-btn btn" href="login.php">Iniciar Sesion</a>
            <?php endif; ?>
        </div>
    </header><!-- End Header -->
    <!-- End Header -->
    <!-- ======= Preloader======= -->
    <?php if ($inicio === true) : ?>
        <div id="preloader"></div>
    <?php endif; ?>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->

    <?php if ($inicio === true) : ?>
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
                <h1>Practicamos hoy,<br>Sobresalimos mañana</h1>
                <h2>Somos un equipo de gimnastas talentosas en desarrollo de este deporte</h2>
            </div>
        </section><!-- End Hero -->
    <?php endif; ?>