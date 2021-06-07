$(document).ready(function() {
  $("#login").on("click", function() {
    login();
  });
});


function login() {
  var email = $("#email").val();
  var password = $("#password").val();

  $.ajax({
    url: "./includes/ajax/login.php",
    method: "POST",
    data: {
      email: email,
      password: password,
    },
    success: function(data) {
      $("#message").html(data);

      if (data.indexOf("Entrenador") >= 0) {
        window.location = "trainer/";
      } else {
        window.location = "student/";
      }
    },
  });
}