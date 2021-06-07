
var tableAlumnos;
document.addEventListener("DOMContentLoaded", function () {
  tableAlumnos= $("#tableAlumnos").DataTable({
    
   
    aProcessing: true,
    aServerSide: true,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
    },
    ajax: {
      url: "models/tablaalumnos/tablaalumnos.php",
      dataSrc: "",
    },
    columns: [
      { data: "acciones" },
      { data: "Nombre" },
      { data: "ApellidoP" },
      { data: "ApellidoM" },
      { data: "FechaNacimiento" },
      { data: "Email" },
      { data: "Ciudad" },
      { data: "Direccion" },
    ],
    responsive: true,
    bDestroy: true,
    iDisplayLength: 10,
    order: [[0, "desc"]],
  });


})


function infoTutor(id) {
  var IdUsuario=id;
    
    var request = (window.XMLHttpRequest) ?   new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
    var url = './models/tablaalumnos/gettutor.php?IdUsuario='+IdUsuario;
    request.open("GET", url, true);
    request.send();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var data = JSON.parse(request.responseText);
        if (data.status) {
            document.querySelector('#nombretutor').innerHTML=data.data.nombretutor;
            document.querySelector('#fechanacimiento').innerHTML=data.data.FechaNacimiento;
            document.querySelector('#email').innerHTML=data.data.Email;
            document.querySelector('#telefono').innerHTML=data.data.Telefono;
            document.querySelector('#parentesco').innerHTML=data.data.Parentesco;
  

            $("#modalTutor").modal("show");
        }else{
            swal('Atencion', data.msg,'error');
        }
      }
    }

}

function historiall(id) {
  var IdUsuario=id;
    
    var request = (window.XMLHttpRequest) ?   new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
    var url = './models/tablaalumnos/gethisto.php?IdUsuario='+IdUsuario;
    request.open("GET", url, true);
    request.send();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var data = JSON.parse(request.responseText);
        if (data.status) {
            document.querySelector('#nombrealum').innerHTML=data.data.nombrealum;
            document.querySelector('#estatura').innerHTML=data.data.Estatura;
            document.querySelector('#peso').innerHTML=data.data.Peso;
            document.querySelector('#sexo').innerHTML=data.data.Sexo;
            document.querySelector('#cirugias').innerHTML=data.data.Cirugias;
            document.querySelector('#estudios').innerHTML=data.data.gradoEstudio;
            document.querySelector('#enfermedades').innerHTML=data.data.nombreEnfermedad;
            document.querySelector('#nombreLesion').innerHTML=data.data.Nombre;
            document.querySelector('#fechaLesion').innerHTML=data.data.FechaLesion;
            document.querySelector('#rehabilitacion').innerHTML=data.data.Rehabilitacion;
            document.querySelector('#tiempoRehabilitacion').innerHTML=data.data.TiempoRehabili;
           
  

            $("#modalHistorial").modal("show");
        }else{
            swal('Atencion', data.msg,'error');
        }
      }
    }

}