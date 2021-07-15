<?php

class ControladorAgregarAlertas{

  /*=============================================
	EDITAR ALERTA
	=============================================*/

  static public function ctrAgregarAlerta(){

    if(isset($_POST["nuevaAccion"])){

      $tabla = "alarmas";
      $datos = array("acciones" => $_POST["nuevaAccion"], "id" => $_POST["idAccion"]);

      $respuesta = ModeloAccionAlertas::mdlIngresarAlerta($tabla, $datos);

      if($respuesta == "ok"){

        echo'<script>

        swal({
            type: "success",
            title: "La accion se agrego correctamente",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result) {
                if (result.value) {

                window.location = "listadoAlertas";

                }
              })

        </script>';

      }else {
        echo'<script>

        swal({
            type: "danger",
            title: "La accion no puede ir vacio",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result) {
                if (result.value) {

                window.location = "listadoAlertas";

                }
              })

        </script>';
      }


    }

  }

}
