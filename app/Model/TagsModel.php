<?php

namespace App\Model ;

class TagsModel {

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }


    public function addtags($nom){
     
        $stmt =  $this->db->prepare("INSERT INTO tags (nom_tag)VALUE (?)");
        $stmt->execute([$nom]);
        return $stmt;
    }

    public function deletetag($id){
        $stmt = $this->db->prepare("DELETE FROM tags where id = $id");
        $stmt->execute();
        return $stmt;
    }
}
    
