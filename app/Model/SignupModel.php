<?php

namespace App\Model;

use PDO;

class SignupModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    public function registerUser($nom, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = $this->db->prepare("INSERT INTO users (nom, email, password, role) VALUES (?, ?, ?, 1)");

        $sql->bindParam(1, $nom, PDO::PARAM_STR);
        $sql->bindParam(2, $email, PDO::PARAM_STR);
        $sql->bindParam(3, $hashedPassword, PDO::PARAM_STR);

        $result = $sql->execute();
    }


}
