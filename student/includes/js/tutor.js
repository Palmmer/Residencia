$(document).ready(function() {
    $("#gtutor").on("click", function() {
      tutor();
    });
    $("#gtutor").click(function(){
      location.href = "unidades.php";
    });
  });
  
  function tutor() {
    var nombret = $("#nombret").val();
    var apellidopt = $("#apellidopt").val();
    var apellidomt = $("#apellidomt").val();
    var fechat = $("#fechat").val();
    var emailt = $("#emailt").val();
    var telefonot = $("#telefonot").val();
    var parentesco = $("#parentesco").val();
    
   

    $.ajax({
      url: "includes/ajax/ajaxtutor.php",
      method: "POST",
      data: {
        nombret: nombret,
        apellidopt: apellidopt,
        apellidomt: apellidomt,
        fechat: fechat,
        emailt: emailt,
        telefonot: telefonot,
        parentesco: parentesco,
      
      },
      success: function(data) {
        $("#message").html(data);
        // location.href="enfermedad.php";
        if (data.indexOf("Tutor") >= 0) {
          $('#nombret').val("");
          $('#apellidopt').val("");
          $('#apellidomt').val("");
          $('#fechat').val("");
          $('#emailt').val("");
          $('#telefonot').val("");
          $('#parentesco').val("");
        
        }
      }
     
    });

  }