var emp_id = $("#EMP_IDx").val();

function init() {
  $("#mantenimiento_form").on("submit", function (e) {
    guardaryeditar(e);
  });
}

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#mantenimiento_form")[0]);
  formData.append("emp_id", $("#EMP_IDx").val());
  /* TODO: Guardar Informacion */
  $.ajax({
    url: "../../controller/cliente.php?op=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (data) {
      $("#buttons-datatables").DataTable().ajax.reload();
      $("#modalmantenimiento").modal("hide");

      /* TODO: Mensaje de sweetalert */
      swal.fire({
        title: "Cliente",
        text: "Registrado confirmado",
        icon: "success",
      });
    },
  });
}

$(document).ready(function () {
  /* TODO: Listar informacion en el datatable js */
  $("#buttons-datatables").DataTable({
    aProcessing: true,
    aServerSide: true,
    dom: "Bfrtip",
    buttons: ["copyHtml5", "excelHtml5", "csvHtml5"],
    ajax: {
      url: "../../controller/cliente.php?op=listar",
      type: "post",
      data: { emp_id: emp_id },
    },
    bDestroy: true,
    responsive: true,
    bInfo: true,
    iDisplayLength: 10,
    order: [[0, "desc"]],
    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar _MENU_ registros",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo:
        "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
      sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
      sInfoPostFix: "",
      sSearch: "Buscar:",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending:
          ": Activar para ordenar la columna de manera ascendente",
        sSortDescending:
          ": Activar para ordenar la columna de manera descendente",
      },
    },
  });
});

function editar(cli_id) {
  $.post(
    "../../controller/cliente.php?op=mostrar",
    { cli_id: cli_id },
    function (data) {
      data = JSON.parse(data);
      $("#cli_id").val(data.CLI_ID);
      $("#cli_nom").val(data.CLI_NOM);
      $("#cli_ruc").val(data.CLI_RUC);
      $("#cli_telf").val(data.CLI_TELF);
      $("#cli_direcc").val(data.CLI_DIRECC);
      $("#cli_correo").val(data.CLI_CORREO);
    }
  );
  $("#lbltitulo").html("Editar Registro");
  /* TODO: Mostrar Modal */
  $("#modalmantenimiento").modal("show");
}

function eliminar(cli_id) {
  swal
    .fire({
      title: "¡Atención!",
      text: "¿Desea Eliminar el Registro?",
      icon: "error",
      confirmButtonText: "Si, eliminar",
      showCancelButton: true,
      cancelButtonText: "No",
    })
    .then((result) => {
      if (result.value) {
        $.post(
          "../../controller/cliente.php?op=eliminar",
          { cli_id: cli_id },
          function (data) {
            console.log(data);
          }
        );

        $("#buttons-datatables").DataTable().ajax.reload();

        swal.fire({
          title: "Cliente",
          text: "Eliminado con Éxito",
          icon: "success",
        });
      }
    });
}

$(document).on("click", "#btnnuevo", function () {
  /* TODO: Limpiar informacion */
  $("#cli_id").val("");
  $("#cli_nom").val("");
  $("#cli_ruc").val("");
  $("#cli_telf").val("");
  $("#cli_direcc").val("");
  $("#cli_correo").val("");
  $("#lbltitulo").html("Nuevo Registro");
  $("#mantenimiento_form")[0].reset();
  /* TODO: Mostrar Modal */
  $("#modalmantenimiento").modal("show");
});



init();
