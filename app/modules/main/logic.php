<?php
namespace App\modules\main;

use App\engine\base\BaseLogic;

class Logic extends BaseLogic {
    public function __construct() {
        parent::__construct();
    }

    public function mainContent() {
        return "display logic in main controller";
    }

    public function mainParams($id) {
        return "dispayed id is" . $id;
    }
}