<?php
namespace App\engine\classes;

use App\engine\classes\Config;
use Base;


class Router {
    public function __construct() {
        $this->core   = Base::instance();
        $this->config = Config::instance();
    }

    public function registerRoutes() {
        foreach($this->config->getConfig('routes') as $route) {
            $namespaceModule = "App\modules\\" . $route['module'] . "\\Controller";
            
            $this->core->route($route['method'] . ' ' . $route['pattern'], function() use ($route, $namespaceModule){
                return call_user_func([
                    new $namespaceModule,
                    $route['controller']
                ]);
            });
        }

        return $this;
    }

    public function run() {
        $this->core->run();
    }
}