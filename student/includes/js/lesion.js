
function mostrar(num) {
  if(num==0) {
    document.getElementById('f1').style.display = '';
    
    
  }
  else {
    document.getElementById('f1').style.display = 'none';
  }
}

  $(document).ready(function() {
    $("#glesion").on("click", function() {
      lesion();
    });
    $("#glesion").click(function(){
      location.href = "estudio.php";
    });
  });
  
  function lesion() {
    // if($("#nlesion"))
    // {
    // var nlesion = $("#nlesion").val();
    // console.log(nlesion);
    // }
    // if($("#fechalesion"))
    // {
    // var fechalesion = $("#fechalesion").val();
    // console.log(fechalesion);
    // }
    // if ($("#rehabilitacion"))
    // {
    // var rehabilitacion = $("#rehabilitacion").val();
    // console.log(rehabilitacion);
    // }
    // if ($("#tiempoRehabilitacion"))
    // {
    // var tiempoRehabilitacion = $("#tiempoRehabilitacion").val();
    // console.log(tiempoRehabilitacion);
    // }
    var nlesion = $("#nlesion").val();
     console.log(nlesion);
     var fechalesion = $("#fechalesion").val();
     console.log(fechalesion);
        var rehabilitacion = $("#rehabilitacion").val();
     console.log(rehabilitacion);
     var tiempoRehabilitacion = $("#tiempoRehabilitacion").val();
     console.log(tiempoRehabilitacion);
    

    $.ajax({
      url: "includes/ajax/lesion.php",
      method: "POST",
      data: {
        nlesion: nlesion,
        fechalesion: fechalesion,
        rehabilitacion: rehabilitacion,
        tiempoRehabilitacion: tiempoRehabilitacion,
      
      },
      success: function(data) {
        $("#message").html(data);
        // location.href="enfermedad.php";
        if (data.indexOf("lesion") >= 0) {
          $('#nlesion').val("");
          $('#fechalesion').val("");
          $('#rehabilitacion').val("");
          $('#tiempoRehabilitacion').val("");
        
        }
      }
     
    });
      // Inicia
 
  }
