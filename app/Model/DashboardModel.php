<?php

namespace App\Model ;
use PDO;
class DashboardModel{
    private $db;
    public function __construct()
    {
        // Assuming you have a Database class that provides a PDO connection
        $this->db = Database::getInstance()->getConnection();
    }
    public function getallusers(){
        $query = "SELECT * FROM users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        
           
    }
    public function getallwikis(){
      

       
        $stmt =  $this->db->prepare("SELECT w.*, c.nom as nom FROM wikis w INNER JOIN categories c ON w.id_categorie = c.id WHERE w.statu = 0");
       
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records; 
        
    }

 
        

        public function getAlltags() {
            $query = "SELECT * FROM tags";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }
    

    
  
    public function accept($id) {
        $stmt =  $this->db->prepare("update wikis set statu = 1 where id = $id");
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
           
    }

    public function delete($id) {

        $stmt =  $this->db->prepare("delete from wikis where id = $id");
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}