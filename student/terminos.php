<?php
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
require 'includes/funciones.php';
incluirTemplate('header');
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';




$idUsuario=$_SESSION['id'];
$sql= 'SELECT  concat(usuario.Nombre," ",usuario.ApellidoP," ",usuario.ApellidoM) as nombrealumno, usuario.*
FROM usuario WHERE IdUsuario=?';
$query= $pdo->prepare($sql);
$query->execute(array($idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);

for($i = 0; $i < count($consulta); $i++){
    $nombre_alumno = $consulta[$i]['nombrealumno'];
    $fecha = $consulta[$i]['FechaNacimiento'];
    $email = $consulta[$i]['Email'];
    $ciudad = $consulta[$i]['Ciudad'];
    $direccion = $consulta[$i]['Direccion'];
}

echo'<main id="main" data-aos="fade-in">


<div class="breadcrumbs" data-aos="fade-up">
  <div class="container">
    <h2>Terminos y condiciones de uso.</h2>
  </div>
</div><!-- End Breadcrumbs -->

<section id="contact" class="contact">


<section id="cource-details-tabs about" class="cource-details-tabs about">
<div class="container" data-aos="fade-up">

  <div class="row">
    <div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content">
     
 

<div class="form-group" data-aos="fade-up">
<br>
  <div class="form-group">
<p>
Usted tiene derecho de acceder, rectificar, y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado.
Para el ejercicio de sus derechos de Acceso, Rectificación, Cancelación y Oposición (ARCO), cuando sea legalmente procedente, puede enviar su solicitud a nuestras oficinas vía electrónica a través de
la dirección webmaster@tijuana.tecnm.mx donde con gusto le atenderemos. 
</p>
</div>
 <div>
  <p>
  Nos reservamos el derecho de modificar estos términos de vez en cuando a nuestra entera discreción.
   Por lo tanto, debes revisar estas páginas periódicamente. El uso continuado de la página web o nuestro 
   servicio después de dicho cambio constituye tu aceptación de los nuevos Términos. 
   Si no aceptas alguno de estos términos o cualquier versión futura de los Términos,
   no uses o  accedas (o continúes accediendo) a la página web o al servicio.</p>
  </div>
<div>
 <p>
  El Intituto tecnologico de tijuana (ITT) con domicilio en se le dé a los mismos y de su protección.
  Calzada Del Tecnológico S/N, Fraccionamiento Tomas Aquino Tijuana, Baja California. C.P. 22414,
  es responsable de recabar sus datos personales, el uso que se le dé a los mismos y de su protección. 
  El ITT manifiesta que su información personal será tratada con absoluta confidencialidad; de acuerdo a lo previsto 
  en la Ley Federal de Protección de Datos Personales en Posesión de particulares, en el Capítulo I, artículo 2 y Capítulo II,
  artículos 15, 16 y 17; para los propósitos competentes a dicha Federación como lo son el empadronamiento de Gimnastas,
  Entrenadores, la organización y promoción de la Gimnasia en el país así como en el extranjero a través de competencias 
  y la capacitación continua de sus afiliados.</p></div> 
<div>
<p>
  Los datos recabados por el ITT podrán ser de forma directa; los que se proporcionen personalmente, o indirecta; telefónicamente 
  y a través de nuestra página de Internet o cualquier otro medio electrónico reconocido por el ITT.
  La información solicitada pueden ser la siguiente: nombre, domicilio, escolaridad, teléfono, correo electrónico, función,
  modalidad, fecha de nacimiento.</p> </div>
<div>
<p>
  Los datos personales que se indican, serán incorporados a las bases de datos de la Pagina de Gimnasia Artistica,
 para la gestión interna al Sistema de Registro del Deporte y los programas propios de misma Federación. 
</p></div></div>

<div class="" data-aos="fade-up">

  <div class="center-form">
    <div class="">
      <!--  -->
     <div class="form-group">
    
  <label for="control-label" >Doy el consentimiento del titular '.$nombre_alumno.' sobre los datos anteriormente citados,
  es necesario para la formalización del ingreso al Sistema de Registro del Deporte Federado.
  <a></a></label>

</div>

   </div>
  </div>
</div>
</section>
</section><!-- End Contact Section -->

</main><!-- End #main -->
';
?>


<?php
incluirTemplate('footer');
?>
