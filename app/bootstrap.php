<?php
use App\engine\classes\Router;

class Bootstrap {
    public function run() {
        /* Create F3 router */
        $router = new Router($this);
        $router->registerRoutes()->run();
    }
}