<?php

require_once "../controladores/alertas.controlador.php";
require_once "../modelos/alertas.modelo.php";

class AjaxAccionAlerta{

/*=============================================
EDITAR ALERTA
=============================================*/

public $idAlerta;

public function ajaxEditarAlerta(){

    $item = "id";
    $valor = $this->idAlerta;
    $respuesta = ControladorAlertas::ctrMostrarAlertas($item, $valor);
    echo json_encode($respuesta);

  }

}

/*=============================================
EDITAR ACCION ALERTA
=============================================*/
if(isset($_POST["idAlerta"])){

	$editar = new AjaxAccionAlerta();
	$editar -> idAlerta = $_POST["idAlerta"];
	$editar -> ajaxEditarAlerta();

}
