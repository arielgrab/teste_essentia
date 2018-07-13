<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require(__DIR__ . "/db/Connection.php");
require(__DIR__ . "/db/Model.php");

define('CLASS_DIR', 'app/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_extensions('.class.php');
spl_autoload_register();


require_once __DIR__ . '/app/views/app.php';

