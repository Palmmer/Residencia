<?php
require_once 'sesiones.php';
?>

<!DOCTYPE html>
<html>
<!-- ======= Head ======= -->
<head>
    <title>GIMNASIA ARTISTICA</title>
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/css/FormEstilos.css" rel="stylesheet" >
    <link href="../assets/css/style2.css" rel="stylesheet">
    <link href="../assets/css/calendar.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
    <?php $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    ?>

    <!-- Form3U1 -->
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</head><!-- ======= End Head ======= -->
  
<body>  
  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">

       <h1 class="logo mr-auto"><a href="index.php">Gimnasia Artistica</a></h1>

       <nav class="nav-menu d-none d-lg-block">
           <ul>
            <!-- <li class="active"><a href="/student/index.php">Inicio</a></li>
            <li class="drop-down"><a href="/student/unidades.php">Unidades</a>
              <ul>
                <li><a href="/student/unidad1.php">Unidad 1</a></li>
                <li class="drop-down"><a href="/student/unidad2.php">Unidad 2</a>
                 <ul>
                   <li><a href="/student/ejbases.php">Ejercicios Bases</a></li>
                   <li><a href="/student/manoslibres.php">Manos Libre o Suelo</a></li>
                   <li><a href="/student/barrasasimetricas.php">Barras Asimetricas</a></li>
                   <li><a href="/student/saltocaballo.php">Salto de Caballo / Potro</a></li>
                   <li><a href="/student/evalua2.php">Evaluacion</a></li>
                  </ul>
               </li>
                <li><a href="/student/unidad3.php">Unidad 3</a></li>
                <li><a href="/student/unidad4.php">Unidad 4</a></li>
                <li><a href="/student/unidad5.php">Unidad 5</a></li>
                <li><a href="/student/calendario.php">Calendario</a></li>
             </ul>
           </li> -->
            
            <li class="drop-down"><a href="#"><?=$_SESSION['nombre'];?> </a>
             <!-- <ul>
               <li><a href="perfil.php">Perfil</a></li>
               
             </ul> -->
            </li>
            

          </ul>
        </nav>
         <!-- Boton logout -->
        <a class="get-started-btn btn" href="../../../../logout.php">Cerrar Sesion</a>
        <!-- <a class="get-started-btn btn" href="../../../../logout.php">Cerrar Sesion</a> -->
      

       </div>
    </header><!-- End Header -->
    
    <!-- ======= Preloader======= -->
    <?php if ($inicio === true) : ?>
        <div id="preloader"></div>
    <?php endif; ?>
    <!-- End Preloader -->

      <!-- ======= Hero Section ======= -->

      <?php if ($inicio === true) : ?>
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
                <h1>Practicamos hoy,<br>Sobresalimos mañana</h1>
                <h2>Somos un equipo de gimnastas talentosas en desarrollo de este deporte</h2>
            </div>
        </section><!-- End Hero -->
    <?php endif; ?>