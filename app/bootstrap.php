<?php
use App\engine\classes\Router;
use App\engine\classes\Config;

class Bootstrap {
    public function __construct() {
        /* Set base instance */
        $this->base = Base::instance();

        /* Set config instance */
        $this->config = Config::instance();

        /* Debug settings */
        $this->base->set('DEBUG', $this->config->getConfig('main')['debug']);

        /* UI settings */
        $this->base->set('UI', $this->config->getConfig('main')['ui_patch']);
    }

    public function run() {
        /* Create F3 router */
        $router = new Router($this);
        $router->registerRoutes()->run();
    }
}