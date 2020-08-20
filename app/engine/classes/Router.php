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
            $this->core->base->route($route['method'] . ' ' . $route['patch'], function() use ($route) {
                echo $route['name'];
            });
        }

        return $this;
    }

    public function run() {
        $this->core->base->run();
    }
}