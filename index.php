<?php
/* Require autoload composer file */
include __DIR__ . '/vendor/autoload.php';

/* Setting system constant */
define('PRODUCT', 'engineMine CMS');
define('VERSION', '0.1');

define('ROOT', dirname(__FILE__). DIRECTORY_SEPARATOR);
define('APP_PATH', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('APP_CONFIGS_DIR', APP_PATH . 'configs' . DIRECTORY_SEPARATOR);
define('APP_ENGINE_DIR', APP_PATH . 'engine' . DIRECTORY_SEPARATOR);
define('APP_MODULES_DIR', APP_PATH . 'modules' . DIRECTORY_SEPARATOR);
define('APP_BOOTSTRAP_FILE_INCLUDE', APP_PATH . 'bootstrap.php');

/* Include bootstrap file and run application */
include APP_BOOTSTRAP_FILE_INCLUDE;
$bootstrap = new Bootstrap;
$bootstrap->run();