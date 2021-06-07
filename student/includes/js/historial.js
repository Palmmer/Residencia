
function mostrar(num) {
  if(num==0) {
    document.getElementById('f1').style.display = '';
    
    
  }
  else {
    document.getElementById('f1').style.display = 'none';
  }
}

  $(document).ready(function() {
    $("#ghistorial").on("click", function() {
      historial();
    });
    $("#ghistorial").click(function(){
      location.href = "lesion.php";
    });
  });
  
  function historial() {
    var estatura = $("#estatura").val();
    var peso = $("#peso").val();
    if($("#sexo"))
    {
    var sexo = $("#sexo").val();
    console.log(sexo);
    }
    if ($("#ncirugia"))
    {
    var ncirugia = $("#ncirugia").val();
    console.log(ncirugia);
    }

    $.ajax({
      url: "includes/ajax/historial.php",
      method: "POST",
      data: {
        estatura: estatura,
        peso: peso,
        sexo: sexo,
        ncirugia: ncirugia,
      
      },
      success: function(data) {
        $("#message").html(data);
        // location.href="enfermedad.php";
        if (data.indexOf("historial") >= 0) {
          $('#estatura').val("");
          $('#peso').val("");
          $('#sexo').val("");
          $('#ncirugia').val("");
        
        }
         // Inicia
  //  $(window).ready(function(){
   
  
  // });//termina
      }
     
    });
    //   $("#ghistorial").click(function(){
    //   location.href = "lesion.php";
    // });
  }
