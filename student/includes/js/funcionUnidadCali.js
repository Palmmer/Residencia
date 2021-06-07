var tableCali;
document.addEventListener("DOMContentLoaded", function () {
    tableCali= $("#tableCali").DataTable({
    
   
    aProcessing: true,
    aServerSide: true,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
    },
    ajax: {
      url: "models/tablaUnidadCali.php",
      dataSrc: "",
    },
    columns: [
      { data: "Unidad" },
      { data: "Estado" },
     
    
    ],
    responsive: true,
    bDestroy: true,
    iDisplayLength: 10,
    order: [[0, "desc"]],
  });



})