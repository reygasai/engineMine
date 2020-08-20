<?php
namespace App\engine;

use App\engine\classes\Config;
use App\engine\classes\Router;
use Base;

class Core {
    public $base;
    public $config;

    public function __construct() {
        /* Create F3 instance */ 
        $this->base = Base::instance();

        /* Create Config instance */
        $this->config = Config::instance();
        
        /* Enable debug */
        $this->base->set('DEBUG', 1);
    }

    public function run() {
        /* Create F3 router */
        $router = new Router($this);
        $router->registerRoutes()->run();

        $this->config->getConfig('main');
    }
    
}