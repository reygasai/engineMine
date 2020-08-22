<?php
namespace App\engine\base;

use DB\SQL;

abstract class BaseLogic {
    public function __construct() {
        $this->db = 'SQL';
    }        
}