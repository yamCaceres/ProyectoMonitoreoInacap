<?php
require_once "controladores/usuarios.controlador.php";
require_once "controladores/alertas.controlador.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/temperatura.controlador.php";
require_once "controladores/accionAlerta.controlador.php";



require_once "modelos/usuarios.modelo.php";
require_once "modelos/alertas.modelo.php";
require_once "modelos/temperatura.modelo.php";
require_once "modelos/accionAlerta.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
