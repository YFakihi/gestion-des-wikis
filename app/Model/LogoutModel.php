<?php  

namespace App\Model;
session_start();

class LogoutModel{
    private $db;
    public function __construct()
    {
        $this->db= Database::getInstance()->getConnection();
    }

    public function logout(){

        session_destroy();
    }
}