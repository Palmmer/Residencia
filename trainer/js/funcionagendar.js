var tableAgenda;
document.addEventListener("DOMContentLoaded", function () {
    tableAgenda= $("#tableAgenda").DataTable({
    
   
    aProcessing: true,
    aServerSide: true,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
    },
    ajax: {
      url: "models/tablaagendar/tablaagendar.php",
      dataSrc: "",
    },
    columns: [
        { data: "Acciones" },
      { data: "Liga" },
      { data: "Unidad" },
      { data: "nombreusuario" },
      { data: "Fecha" },
      { data: "Hora" },
      { data: "Estado" },
     
    
    ],
    responsive: true,
    bDestroy: true,
    iDisplayLength: 10,
    order: [[0, "desc"]],
  });

var formAgendar = document.querySelector("#formAgendar");
formAgendar.onsubmit = function (e) {
  e.preventDefault();
  var meeting = document.querySelector("#meeting").value;
  var fecha = document.querySelector("#fecha").value;
  var hora = document.querySelector("#hora").value;
  var estatus = document.querySelector("#estatus").value;


  if (
    meeting == "" || 
    fecha == "" || 
    hora == "" ||
    estatus == ""  
  ) {
    Swal.fire("Atencion", "Todos los campos son necesarios", "error");
    return false;
  }

  var request = (window.XMLHttpRequest) ?   new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
  var url = './models/tablaagendar/ajaxAgendar.php';
  var form = new FormData(formAgendar);
  request.open("POST", url, true);
  request.send(form);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var data = JSON.parse(request.responseText);
      if (data.status) {
          $("#modalAgendar").modal("hide");
          formAgendar.reset();
          Swal.fire('Cita', data.msg,'success');
          tableAgenda.ajax.reload();
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

  function editCita(id){
    document.querySelector('#tituloModal').innerHTML='Editar o Agendar Videollamada';
    document.querySelector('#action').innerHTML='Actualizar';
    var idsolicitud=id;
    
    var request = (window.XMLHttpRequest) ?   new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
    var url = './models/tablaagendar/editAgenda.php?idsolicitud='+idsolicitud;
    request.open("GET", url, true);
    request.send();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var data = JSON.parse(request.responseText);
        if (data.status) {
            document.querySelector('#idsolicitud').value=data.data.IdSolicitud;
            document.querySelector('#meeting').value=data.data.Liga;
            document.querySelector('#fecha').value=data.data.Fecha;
            document.querySelector('#hora').value=data.data.Hora;
            document.querySelector('#estatus').value=data.data.Estado;
         
              
            $("#modalAgendar").modal("show");
            
        }else{
          Swal.fire('Atencion', data.msg,'error');
        }
      }
    }
  }

  function deleteCita(id){

    var idsolicitud=id;




    Swal.fire({
        title:"Eliminar Cita",
        text:"Esta seguro de eliminar la cita?",
        icon:"warning",
        showCancelButton:true,
        confirmButtonText:"Si, eliminar",
        cancelButtonText:"No, cancelar",
        showConfirmButton:true,
        showCancelButton:true
    }).then((result)=>{
        if(result.isConfirmed){
          var request = (window.XMLHttpRequest) ?   new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
          var url = './models/tablaagendar/deleteAgenda.php';
          request.open('POST', url, true);
          var strData="idsolicitud="+idsolicitud;
          request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
          request.send(strData);
          request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
              var data = JSON.parse(request.responseText);
              if (data.status) {
                Swal.fire('Eliminar', data.msg,'success');
                  tableAgenda.ajax.reload();
              }else{
                Swal.fire('Atencion', data.msg,'error');
              }
            }
          }
        }
        })
    
}

