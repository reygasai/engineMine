<?php
namespace App\modules\main;

use App\engine\base\BaseController; 

class Controller extends BaseController {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        echo 'index';
    }

    public function rules() {
        echo 'rules';
    }
}