<?php

class ControladorAlertas{

	/*=============================================
	MOSTRAR LECTURAS
	=============================================*/

	static public function ctrMostrarAlertas($item, $valor){

		$tabla = "alarmas";

		$respuesta = ModeloAlertas::mdlMostrarAlertas($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	ALERTAS LECTURAS
	=============================================*/

	static public function ctrAgregarAlerta(){

		if(isset($_POST["nuevaAccion"])){

			if(isset($_POST["nuevaAccion"])){


				$tabla = "alarmas";

				$datos = array("idAlerta" => $_POST["idAlerta"],
								 "accion" => $_POST["nuevaAccion"]);

				$respuesta = ModeloAccionAlertas::mdlIngresarAlerta($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
							type: "success",
							title: "El usuario ha sido editado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							}).then(function(result) {
									if (result.value) {

									window.location = "listadoAlertas";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
							type: "error",
							title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
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
