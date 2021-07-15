<?php

require_once "conexion.php";

class ModeloAccionAlertas{

	static public function mdlIngresarAlerta($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET acciones = :acciones WHERE id = :id");
		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt -> bindParam(":acciones", $datos["acciones"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt -> close();

		$stmt = null;

	}



}
