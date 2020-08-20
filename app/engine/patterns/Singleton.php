<?php
namespace App\engine\patterns;
trait Singleton {
    private static $instance = null;

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function instance() {
        if(static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}