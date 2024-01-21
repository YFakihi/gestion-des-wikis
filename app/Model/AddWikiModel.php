<?php

namespace App\Model;

class AddWikiModel
{
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function addwiki($titre,$contenu,$id_categorie,$id_user){
     
        $stmt =  $this->db->prepare("INSERT INTO wikis (titre,contenu,statu,id_categorie,id_user)VALUE (?,?,0,?,?)");
        $stmt->execute([$titre,$contenu,$id_categorie,$id_user]);
    
        return $stmt;
    }
    function getDb(){
       return $this->db;
    } 
}