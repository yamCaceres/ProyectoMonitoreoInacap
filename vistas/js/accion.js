$(".btnAgregarAccion").click(function(){

  var idAlerta = $(this).attr("idAlerta");
  console.log("idAlerta" , idAlerta);

  var datos = new FormData();
  datos.append("idAlerta" , idAlerta);

  $.ajax({

    url:"ajax/accion.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){
      console.log("respuesta", respuesta);
      $("#idAccion").val(respuesta["id"]);
    }

  });

})
