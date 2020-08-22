<?php
namespace App\engine\classes;

use App\engine\classes\Config;
use Base;


class Router { 
    public function __construct() {
        /* Set base instance */
        $this->base   = Base::instance();

        /* Set config instance */
        $this->config = Config::instance();
    }

    public function registerRoutes() {
        /* Register routes */
        foreach($this->config->getConfig('routes') as $module => $routes) {
            $controllerNamespace = "App\modules\\" . $module . "\\Controller";
            $controller = new $controllerNamespace;
            
            foreach($routes as $method => $methodRoutes) {
                foreach($methodRoutes as $pattern => $rules) {
                    $this->base->route($method . ' ' . $pattern . ' '. $rules['modifiers'], function() use ($rules, $controller) {
                        call_user_func_array([
                            $controller,
                            $rules['controller']
                        ], array_slice(Base::instance()->get('PARAMS'), 1));

                        echo call_user_func([$controller, 'render']);
                    });
                }
            }
        }

        /* Register on error page */
        $this->base->set('ONERROR', function() {
            echo call_user_func([new \App\modules\error\Controller, 'render']);
        });

        return $this;
    }
}