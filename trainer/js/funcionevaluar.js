var tableEvaluar;
document.addEventListener("DOMContentLoaded", function () {
    tableEvaluar= $("#tableEvaluar").DataTable({
    
   
    aProcessing: true,
    aServerSide: true,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
    },
    ajax: {
      url: "models/tablacali/tablaEvaluar.php",
      dataSrc: "",
    },
    columns: [
        { data: "Acciones" },
         { data: "nombreusuari" },
      { data: "Unidad" },
      { data: "Estado" },
     
    
    ],
    responsive: true,
    bDestroy: true,
    iDisplayLength: 10,
    order: [[0, "desc"]],
  });

var formEvaluar= document.querySelector("#formEvaluar");
formEvaluar.onsubmit = function (e) {
  e.preventDefault();

  var estado = document.querySelector("#estado").value;


  if (
   
    estado == ""  
  ) {
    Swal.fire("Atencion", "Todos los campos son necesarios", "error");
    return false;
  }

  var request = (window.XMLHttpRequest) ?   new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
  var url = './models/tablacali/ajaxEvaluar.php';
  var form = new FormData(formEvaluar);
  request.open("POST", url, true);
  request.send(form);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var data = JSON.parse(request.responseText);
      if (data.status) {
          $("#modalEvaluar").modal("hide");
          formEvaluar.reset();
          Swal.fire('Acreditado', data.msg,'success');
          tableEvaluar.ajax.reload();
      }else{
        Swal.fire('Atencion', data.msg,'error');
      }
    }
  }
}

})
// function openModalagendar() {
//     // document.querySelector('#idsolicitud').value="";
//     document.querySelector('#tituloModal').innerHTML='Agendar Videollamada';
//     document.querySelector('#action').innerHTML='Guardar';
//     document.querySelector('#formAgendar').reset();
//   $("#modalAgendar").modal("show");
//   }

  function editEvaluacion(id){
    document.querySelector('#tituloModal').innerHTML='Editar Evaluacion';
    document.querySelector('#action').innerHTML='Actualizar';
    var idevaluacion=id;
    
    var request = (window.XMLHttpRequest) ?   new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
    var url = './models/tablacali/editEvaluar.php?idevaluacion='+idevaluacion;
    request.open("GET", url, true);
    request.send();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var data = JSON.parse(request.responseText);
        if (data.status) {
            document.querySelector('#idevaluacion').value=data.data.IdEvaluacion;
            document.querySelector('#estado').value=data.data.Estado;
         
              
            $("#modalEvaluar").modal("show");
            
        }else{
          Swal.fire('Atencion', data.msg,'error');
        }
      }
    }
  }