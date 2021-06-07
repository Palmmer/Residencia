var tablePeticiones;
document.addEventListener("DOMContentLoaded", function () {
    tablePeticiones= $("#tablePeticiones").DataTable({
    
   
    aProcessing: true,
    aServerSide: true,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
    },
    ajax: {
      url: "models/tablapeticiones.php",
      dataSrc: "",
    },
    columns: [
      { data: "Unidad" },
      { data: "Liga" },
      { data: "Fecha" },
      { data: "Hora" },
      { data: "Estado" },
     
    
    ],
    responsive: true,
    bDestroy: true,
    iDisplayLength: 10,
    order: [[0, "desc"]],
  });

var formSolicitar = document.querySelector("#formSolicitar");
formSolicitar.onsubmit = function (e) {
  e.preventDefault();
  // var idsolicitud=document.querySelector("#idsolicitud").value;
  var listUnidad = document.querySelector("#listUnidad").value;


  if (
    listUnidad == "" 
  ) {
    Swal.fire("Atencion", "Todos los campos son necesarios", "error");
    return false;
  }

  var request = (window.XMLHttpRequest) ?   new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
  var url = './models/ajaxSolicitar.php';
  var form = new FormData(formSolicitar);
  request.open("POST", url, true);
  request.send(form);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var data = JSON.parse(request.responseText);
      if (data.status) {
          $("#modalSolicitar").modal("hide");
          formSolicitar.reset();
          Swal.fire('Solicitud', data.msg,'success');
          tablePeticiones.ajax.reload();
      }else{
        Swal.fire('Atencion', data.msg,'error');
      }
    }
  }
}

})


function openModalsolicitar() {
  // document.querySelector('#idsolicitud').value="";
  document.querySelector('#tituloModal').innerHTML='Solicitar Videollamada';
  document.querySelector('#action').innerHTML='Guardar';
  document.querySelector('#formSolicitar').reset();
$("#modalSolicitar").modal("show");
}