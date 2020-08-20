<?php
namespace App\engine\base;

use View;
use Template;

abstract class BaseController {
    private $view;
    private $template;

    public function __construct() {
        $this->view = View::instance();
        $this->template = Template::instance();
    }        
}