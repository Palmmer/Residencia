<?php

require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\includes\config\database.php';
require 'includes/funciones.php';
incluirTemplate('headerh');
require_once 'C:\Users\alex_\OneDrive\Escritorio\ResidenciaGym\student\includes\templates\sesiones.php';

$idUsuario=$_SESSION['id'];
$sql= 'SELECT lesion.IdLesion , historialme.IdHistorialM , usuario.IdUsuario FROM lesion 
RIGHT JOIN historialme ON lesion.IdHistorialM= historialme.IdHistorialM 
RIGHT JOIN usuario ON historialme.IdUsuario = usuario.IdUsuario WHERE usuario.IdUsuario=?';
$query= $pdo->prepare($sql);
$query->execute(array($idUsuario));

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($consulta); $i++) {
  if($consulta[$i]['IdHistorialM']==null && $consulta[$i]['IdLesion']==null){
    $idHistorial = null;
    $idLesion = null; 
  }else{
     $idHistorial = $consulta[$i]['IdHistorialM'];
  $idLesion = $consulta[$i]['IdLesion'];
  }
 
}

if($idHistorial == null && $idLesion ==null){

echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted debe de llenar primero el historial medico.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/historial.php">Llenar historial medico</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
}elseif ($idHistorial != null && $idLesion ==null) {
  echo '<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Lesiones</h2>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">


<div class="container" data-aos="fade-up">

      <div class="center-form">
        <div class="col-lg-4 mt-lg-0 ">
          <!--  -->
          <form action=" " method="post" role="form" class="form">
            
          <div class=" form-group">
              <label class="control-label">¿Has tenido alguna lesion?</label> <br>
              <input  type="radio" value="Si" id="preguntaop" name="lesion" onclick="mostrar(0)" />Si<br>
              <input  type="radio" value="No" id="preguntaop" name="lesion" onclick="mostrar(1)" />No<br>
             
          </div>

          <div id="f1" style="display: none">
             
               
            <div class=" form-group">
                
                 <label class="control-label">¿Que lesion tuviste?</label>
                 <input type="text" class="form-control" name="nlesion" id="nlesion"  /> <br>
            </div>

               <div class=" form-group">
                 <label class="control-label">¿Cual es la fecha que tuviste tu lesion?</label>
                 <input type="date" class="form-control" name="fechalesion" id="fechalesion" /> <br>
              </div>
             <div class=" form-group">
               <label class="control-label">¿Con que especialista llevas ti rehabilitacion?</label>
               <input type="text" class="form-control" name="rehabilitacion" id="rehabilitacion" placeholder="Fisioterapeuta, etc." /> <br>
      
               </div>

             <div class=" form-group">
               <label class="control-label">¿Cuanto tiempo duro tu rehabilitacion?</label>
               <input type="text" class="form-control" name="tiempoRehabilitacion" id="tiempoRehabilitacion" placeholder="1 mes" /> <br>
      
               </div>
              
             
          
          </div>
 



            <!-- <div id="plesion"> -->
              
              
            <!-- </div> -->

            <div id="message"></div>

          
            <!-- class="get-started-btn btn" -->
             <div class="text-center "><button id="glesion" name="glesion" class="get-started-btn btn"  type="button">Guardar</button></div><br>

          </form>


    </div>

  </div>

</div>

</div>
</section><!-- End Contact Section -->



</main><!-- End #main -->';

}elseif ($idHistorial != null && $idLesion !=null) {
  echo'<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Usted debe de llenar el apartado de estudio.</h2>
      <button class="btn btn-primary "  type="button"><a style="color:rgb(252, 252, 252);"href="/student/estudio.php">Estudio</a></button>
    </div>
  </div><!-- End Breadcrumbs -->

</main><!-- End #main -->';
}


incluirTemplate('footerh');
?>

<?php

?>