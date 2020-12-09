<?php

    class controllerBase {

        public function __construct() {
            foreach (glob("models/*.php") as $file) {
                require_once $file;
            }
        }

        public function view ($view, $datos, $array=array()) {
            foreach ($datos as $id_assoc => $values) {
                $array[$id_assoc] = $values;
            }
            $response = $array;

            require_once CORE_PATH . '/helper_vista.php';

            $helpers = new helperVista;

            require_once VIEW_PATH . '/' . $view . '_view.php';
        }

        public function redirect () {
            header("Location: /biblioteca-publica-agustin-codazzi/src/index.php");
        }
    }