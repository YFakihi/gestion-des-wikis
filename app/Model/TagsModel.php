<?php

namespace App\Model ;

class TagsModel {

    private $db;

    public function __construct()
    {
        // Assuming you have a Database class that provides a PDO connection
        $this->db = Database::getInstance()->getConnection();
    }
    // public function creat($data) {
    //     $stmt =  $this->db->prepare("INSERT INTO jobs (title,user_id)
    //     VALUE (?,?)");
    //     $stmt->execute($data);
    //     return $stmt;
    
    // }
    public function addtags($nom){
        // $q = "insert into tags (nom_tag) values (?)";
        // $stm = $this->db->prepare($q);
        // $add =  $stm->execute($nom);
        // //  dump($add);

        $stmt =  $this->db->prepare("INSERT INTO tags (nom_tag)
        VALUE (?)");
        $stmt->execute([$nom]);
        return $stmt;
    }
}
    
