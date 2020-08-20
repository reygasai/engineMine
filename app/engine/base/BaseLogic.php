<?php
namespace App\engine\base;

use DB\SQL;

abstract class BaseLogic {
    private $db;

    public function __construct() {
        $this->db = 'SQL';
    }        
}