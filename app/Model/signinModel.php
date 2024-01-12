<?php 
namespace App\Model;
use PDO;

class SigninModel{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function login($email, $password){
      
            $sql = $this->db->prepare("SELECT id, email, password, role FROM users WHERE email = :email and password = :password");  
            $sql->bindParam(1, $email, PDO::PARAM_STR);
            $sql->bindParam(2, $password, PDO::PARAM_STR);
            $sql->execute();
            $result = $sql->fetch(PDO::FETCH_OBJ);
            return !empty($result) ? $result : false;
        
    }
}