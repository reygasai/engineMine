<?php
/* Require autoload composer file */
include __DIR__ . '/vendor/autoload.php';

/* User core namespace */
use App\engine\Core;

/* Setting system constant */
define('PRODUCT', 'engineMine CMS');
define('VERSION', '0.1');

define('ROOT', dirname(__FILE__). DIRECTORY_SEPARATOR);
define('APP_PATH', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('APP_CONFIGS_DIR', APP_PATH . 'configs' . DIRECTORY_SEPARATOR);
define('APP_ENGINE_DIR', APP_PATH . 'engine' . DIRECTORY_SEPARATOR);
define('APP_CORE_FILE_INCLUDE', APP_ENGINE_DIR . 'core.php');

/* Include core file and run application */
include APP_CORE_FILE_INCLUDE;
$core = new Core;
$core->run();