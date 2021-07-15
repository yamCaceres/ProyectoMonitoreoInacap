<?php

class ControladorTemperatura{

	/*=============================================
	MOSTRAR LECTURAS
	=============================================*/

	static public function ctrMostrarTemperatura($item, $valor){

		$tabla = "refrigeracion";

		$respuesta = ModeloTemperatura::mdlMostrarTemperatura($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	RANGO FECHAS
	=============================================*/

	static public function ctrRangoFechasTemperatura($fechaInicial, $fechaFinal){

		$tabla = "refrigeracion";
		$respuesta = ModeloTemperatura::mdlRangoFechasTemperatura($tabla, $fechaInicial, $fechaFinal);
		return $respuesta;

	}
}
