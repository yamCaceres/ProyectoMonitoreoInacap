<?php

class ControladorControladores{



	static public function ctrMostrarControladores($item, $valor){

		$tabla = "controladores";

		$respuesta = ModeloControladores::mdlMostrarControladores($tabla, $item, $valor);

		return $respuesta;

		}

	}
