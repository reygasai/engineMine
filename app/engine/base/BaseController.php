<?php
namespace App\engine\base;

use App\engine\classes\Template;

abstract class BaseController {
    public function __construct() {
        $this->template = Template::instance();
    }

    public function render() {
        return $this->template->render();
    }
}