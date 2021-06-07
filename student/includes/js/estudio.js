$(document).ready(function() {
    $("#gestudio").on("click", function() {
      estudio();
    });
    $("#gestudio").click(function(){
      location.href = "enfermedad.php";
    });
  });
  
  function estudio() {
    var estudio = $("#estudio").val();
    
   

    $.ajax({
      url: "includes/ajax/estudio.php",
      method: "POST",
      data: {
        estudio: estudio,
      
      },
      success: function(data) {
        $("#message").html(data);
        // location.href="enfermedad.php";
        if (data.indexOf("Estudio") >= 0) {
          $('#estudio').val("");
        
        }
      }
     
    });

  }