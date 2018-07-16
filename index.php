<?php
ini_set('display_errors', true);
error_reporting(E_ERROR);

define('ROOT_DIR', __DIR__);
define('ROOT_URL', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/');


require(__DIR__ . "/db/Connection.php");
require(__DIR__ . "/db/Model.php");

spl_autoload_register(function ($class) {

    $prefix = 'App\\';

    $base_dir = __DIR__ . '/app/';

    $folders = ['models', 'controllers', 'helpers'];

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);

    foreach ($folders as $key => $folder) {
	    $file = $base_dir  . $folder . '/' . str_replace('\\', '/', $relative_class) . '.class.php';

	    if (file_exists($file)) {
	        require $file;
	    }
    }
});

require_once __DIR__ . '/config/routes.php';
require_once __DIR__ . '/app/views/app.html.php';