<?php
namespace App\modules\main;

use App\engine\base\BaseLogic;

class Logic extends BaseLogic {
    public function __construct() {
        parent::__construct();
    }

    public function test() {
        echo "test";
    }

    public function test2() {
        echo "test2";
    }
}