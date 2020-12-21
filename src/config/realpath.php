<?php

    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/biblioteca-publica-agustin-codazzi/src');
    define('CONFIG_PATH', pathName(ROOT_PATH . '/config'));
    define('CONTROLLER_PATH', pathName(ROOT_PATH . '/controllers'));
    define('CORE_PATH', pathName(ROOT_PATH . '/core'));
    define('MODEL_PATH', pathName(ROOT_PATH . '/models'));
    define('VIEW_PATH', pathName(ROOT_PATH . '/views'));

    define('ACCION_DEFECTO', 'index');

    // Funcion que comprueba las rutas para tener mayor portabilidad
    function pathName ($dir) {
    	$dir = realpath( $dir );
      $pos = strrpos( $dir , "\\" ); //Windows
      	
      if ($pos === false) {
        $pos = strrpos( $dir ,"/"); //Linux :)
      }

      $dir = substr( $dir,$pos+1,strlen($dir)-$pos );
      return $dir;
	 }