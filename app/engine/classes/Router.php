<?php
namespace App\engine\classes;

use App\engine\classes\Config;
use Base;


class Router { 
    public function __construct() {
        /* Set base instance */
        $this->core   = Base::instance();

        /* Set config instance */
        $this->config = Config::instance();
    }

    public function registerRoutes() {
        foreach($this->config->getConfig('routes') as $module => $routes) {
            $controllerNamespace = "App\modules\\" . $module . "\\Controller";
            $controller = new $controllerNamespace;

            foreach($routes as $pattern => $rules) {
                $this->core->route($rules['method'] . ' ' . $pattern, function() use ($rules, $controller){
                    return call_user_func([
                        $controller,
                        $rules['controller']
                    ]);
                });
            }
        }

        return $this;
    }

    public function run() {
        $this->core->run();
    }
}