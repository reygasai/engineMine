<?php
namespace App\engine\classes;
use App\engine\Core;

class Router {
    private $core;

    public function __construct(Core $core) {
        $this->core = $core;
    }

    public function registerRoutes() {
        foreach($this->core->config->getConfig('routes') as $route) {
            $namespaceModule = "App\modules\\" . $route['module'] . "\\Controller";
            
            $this->core->base->route($route['method'] . ' ' . $route['pattern'], function() use ($route, $namespaceModule){
                return call_user_func([
                    new $namespaceModule,
                    $route['controller']
                ]);
            });
        }

        return $this;
    }

    public function run() {
        $this->core->base->run();
    }
}