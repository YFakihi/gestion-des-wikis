<?php 
namespace App\Model;
use PDO;

class SigninModel{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    
}    