<?php

define('ROOT', dirname( __DIR__ ) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('VIEW', ROOT . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('MODEL', ROOT . 'app' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define('DATABASE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT . 'app' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);
$modules = [ROOT,APP,CORE,CONTROLLER,DATABASE,MODEL];

set_include_path( get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR,$modules));
spl_autoload_register( 'spl_autoload', false );

new Router;

// var_dump( $_SERVER['REQUEST_URI'] );
// var_dump( get_include_path() );
