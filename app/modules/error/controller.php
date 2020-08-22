<?php
namespace App\modules\error;

use App\engine\base\BaseController;

class Controller extends BaseController {
    public function __construct() {
        parent::__construct();

        $this->template->setLayout('404.html');
    }
}