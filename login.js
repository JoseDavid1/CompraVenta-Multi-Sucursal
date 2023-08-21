$(document).ready(function () {
  /*------------------Obtenemos la variable de la compania por la url------------------*/
  var com_id = getUrlParameter("c");
  //console.log(com_id); --para probar si está pasando el parametro de la compania por url
  /*------------------Iniciando Select 2 Empresa------------------*/
  $("#emp_id").select2();

  /*------------------Iniciando Select 2 Empresa------------------*/
  $("#suc_id").select2();

  /*------------------Llenado de combo Empresa------------------*/
  $.post(
    "controller/empresa.php?op=combo",
    { com_id: com_id },
    function (data) {
      //console.log(data);  -- para revisar si estan pasando los parámetros
      $("#emp_id").html(data);
    }
  );

  /*------------------Llenado de combo Sucursal------------------*/
  $("#emp_id").change(function () {
    $("#emp_id").each(function () {
      emp_id = $(this).val();

      $.post(
        "controller/sucursal.php?op=combo",
        { emp_id: emp_id },
        function (data) {
          //console.log(data);  -- para revisar si estan pasando los parámetros
          $("#suc_id").html(data);
        }
      );
    });
  });
});

/*------------------TODO: Obtener parametro de URL------------------*/
var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split("&"),
    sParameterName,
    i;

  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split("=");

    if (sParameterName[0] === sParam) {
      return sParameterName[1] === undefined ? true : sParameterName[1];
    }
  }
};

/* $("#login_form").on("submit", function (e) {
  e.preventDefault();

  if ($("#login_form").val() == '') {
    swal.fire({
      title: "Bienvenido",
      text: "Login exitoso",
      icon: "success",
    });
  } else {
    swal.fire({
      title: "Error",
      text: "Credenciales incorrectas",
      icon: "error",
    });
  }
}); */
