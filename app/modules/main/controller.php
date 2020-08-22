<?php
namespace App\modules\main;

use App\engine\base\BaseController;
use App\modules\main\Logic;

class Controller extends BaseController {
    public function __construct() {
        parent::__construct();

        $this->main = new Logic;
    }
    
    public function index() {
        $this->template->setTitle('Новости проекта');
        $this->template->addTag('content', $this->main->mainContent());
    }

    public function params($id, $id2) {
        $this->template->setTitle('Тестовая страница');
        $this->template->addTag('content', $this->main->mainParams($id, $id2));
    }
}