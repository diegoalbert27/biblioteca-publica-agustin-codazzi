<?php
//Configuración global
require_once 'config/realpath.php';
 
//Base para los controladores
require_once CORE_PATH . '/controller_base.php';
 
//Funciones para el controlador frontal
require_once CORE_PATH . '/function_control.php';

//Cargamos controladores y acciones
if (isset($_GET["controller"])) {
    $controllerObj = cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
} else {
    $controllerObj = cargarControlador('solicitante');
    lanzarAccion($controllerObj);
}