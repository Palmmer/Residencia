$(document).ready(function() {
  $("#register").on("click", function() {
    register();
  });
});

function register() {
  var nombre = $("#nombre").val();
  var apellidoP = $("#apellidoP").val();
  var apellidoM = $("#apellidoM").val();
  var fecha = $("#fecha").val();
  var email = $("#email").val();
  var ciudad =$("#ciudad").val();
  var asociacion =$("#asociacion").val();
  var direccion =$("#direccion").val();
  var password = $("#password").val();
  var rol = $("#rol").val();

  console.log(password);




  $.ajax({
    url: "./includes/ajax/register.php",
    method: "POST",
    data: {
      nombre: nombre,
      apellidoP: apellidoP,
      apellidoM: apellidoM,
      fecha: fecha,
      email: email,
      ciudad:ciudad,
      asociacion:asociacion,
      direccion:direccion,
      password: password,
      rol: rol,
    },
    success: function(data) {
      $("#message").html(data);

      if (data.indexOf("Registro") >= 0) {
        $('#nombre').val("");
        $('#apellidoP').val("");
        $('#apellidoM').val("");
        $('#fecha').val("");
        $('#email').val("");
        $('#ciudad').val("");
        $('#asociacion').val("");
        $('#direccion').val("");
        $('#rol').val("");
        $('#password').val("");
      }
    }
  });
}