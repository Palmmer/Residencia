

<!DOCTYPE html>
<html>
<!-- ======= Head ======= -->
<head>
<!-- <meta charset="utf-8"> -->
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
    <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../assets/css/calendar.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- <link rel="stylesheet" href="../assets/css/styleForm.css"> -->

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">
    <?php $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>
    <!--  Full Calendar -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    
    <script src="js/bootstrap-clockpicker.js"></script>
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css">


      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
    
      .fc th{
          padding: 10px 0px;
          vertical-align: middle;
          background: #F2F2F2;


      }
    </style>



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
            <li class="active"><a href="/trainer/index.php">Inicio</a></li>
            <li class="drop-down" ><a href="/trainer/alumnos.php">Alumnos</a>
            <ul>
               <li><a href="/trainer/alumnos.php">Alumnos</a></li>
               <li><a href="/trainer/evaluar.php">Evaluar</a></li>
             </ul>
            </li>
            <li class="drop-down"><a href="/trainer/index.php">Calendario</a>
            <ul>
               <li><a href="/trainer/calendario.php">Calendario</a></li>
               <li><a href="/trainer/agenda.php">Agenda</a></li>
              
               <!-- <li><a href="">Cerrar Sesion</a></li> -->
             </ul>
            </li>
       
          <!-- nombre del profesor -->
            <li class="drop-down"><a href="perfil.php">Perfil</a>
             <ul>
               <li><a href="perfil.php">Perfil</a></li>
               <!-- <li><a href="">Cerrar Sesion</a></li> -->
             </ul>
            </li>
            <!-- <li><a href="unidad3.php">Unidad 3</a></li> -->

          </ul>
        </nav><!-- end .nav-menu -->
          <!-- Boton logout -->
        <a class="get-started-btn btn" href="../../../../logout.php">Cerrar Sesion</a>
      

       </div>
    </header><!-- End Header -->
    
    <!-- ======= Preloader======= -->
    <?php if ($inicio === true) : ?>
        <div id="preloader"></div>
    <?php endif; ?>
    <!-- End Preloader -->

      <!-- ======= Hero Section ======= -->

      
    




<main>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7"> <br/><br/> <div id="CalendarioWeb"></div></div>
            <div class="col"></div>
        </div>
    </div>
   
<script>
    $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar({
            header:{
                left:'today,prev,next', 
                center:'title',
                right:'month,basicWeek,basicDay,agendaWeek,agendaDay'
            }, dayClick:function(date,jsEvent,view){

                $('#btnAgregar').prop("disabled",false);
                $('#btnModificar').prop("disabled",true);
                $('#btnEliminar').prop("disabled",true);


                limpiarFormulario();
                $('#txtFecha').val(date.format());
                $("#ModalEventos").modal();

            }, 
             events:'calendar.php',
            
           eventClick:function(calEvent,jsEvent,view){


                $('#btnAgregar').prop("disabled",true);
                $('#btnModificar').prop("disabled",false);
                $('#btnEliminar').prop("disabled",false);

               
                // H2
                $('#tituloEvento').html(calEvent.title);
                
               // Mostrar la información del evento en los inputs
                $('#txtDescripcion').val(calEvent.descripcion);
                $('#txtID').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                
                FechaHora= calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                
               
                $("#ModalEventos").modal();

           }, 
           editable:true, 
           eventDrop:function(calEvent){
                $('#txtID').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);

                var fechaHora=calEvent.start.format().split("T");
                $('#txtFecha').val(fechaHora[0]);
				$('#txtHora').val(fechaHora[1]);

                RecolectarDatosGUI();
                EnviarInformacion('modificar',NuevoEvento,true);

           }
           
            
            
			

        });

    });

</script>

<!-- Modal(Agregar, m¡Modificar, Eliminar) -->
<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tituloEvento"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

         
         <input type="hidden" id="txtID" name="txtID">
           <input type="hidden" id="txtFecha" name="txtFecha" />

          <div class="form-row">
                <div class="form-group col-md-8">
                    <label>Título:</label>
                    <input type="text" id="txtTitulo" class="form-control" placeholder="Título del evento" >
                </div>
                <div class="form-group col-md-4">
                        <label >Hora del evento:</label>
                       
                        <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" id="txtHora" value="" class="form-control" />
                        </div>
                            
                    
                            
                      

                        
                </div>

            </div>
            <div class="form-group" >
                    <label >Descripción:</label>
                    <textarea  id="txtDescripcion" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group" >   
                        <label >Color:</label>
                        <input type="color" value="#ff0000"id="txtColor" class="form-control" style="height:36px;">
                </div>


        </div>
        <div class="modal-footer">

            <button type="button" id="btnAgregar" class="btn btn-success" >Agregar</button>
            <button type="button" id="btnModificar" class="btn btn-success" >Modificar</button>
            <button type="button" id="btnEliminar" class="btn btn-danger" >Borrar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            

        </div>
      </div>
    </div>
  </div>
<script>
var NuevoEvento; 
    
 $('#btnAgregar').click(function(){
   
     RecolectarDatosGUI();
     EnviarInformacion('agregar',NuevoEvento);
});
$('#btnEliminar').click(function(){
     RecolectarDatosGUI();
     EnviarInformacion('eliminar',NuevoEvento);
});
$('#btnModificar').click(function(){
     RecolectarDatosGUI();
     EnviarInformacion('modificar',NuevoEvento);
});


    
function RecolectarDatosGUI(){
    NuevoEvento= {
         id:$('#txtID').val(),
         title:$('#txtTitulo').val(), 
         start:$('#txtFecha').val()+" "+$('#txtHora').val(), 
         color:$('#txtColor').val(),
         descripcion:$('#txtDescripcion').val(),
         textColor:"#FFFFFF", 
         end:$('#txtFecha').val()+" "+$('#txtHora').val() 
        }; 
    
}
function EnviarInformacion(accion,objEvento,modal){
        $.ajax({
            type:'POST', 
            url:'eventos.php?accion='+accion, 
            data:objEvento, 
            success:function(msg){
             if(msg){
                $('#CalendarioWeb').fullCalendar('refetchEvents');  
                if(!modal){
                    $("#ModalEventos").modal('toggle');
                }
                

             }
            }, 
            error:function(){
                alert("Hay un error ..");
            }

        });



}

$('.clockpicker').clockpicker();
function limpiarFormulario(){
                $('#txtID').val('');
                $('#txtTitulo').val('Evento..');
                $('#txtColor').val('');
                $('#txtDescripcion').val('');

}

</script>
   
</main>

 