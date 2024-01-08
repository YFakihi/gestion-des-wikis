<?php
namespace App\Model;
include __DIR__ ."../../../database/Connection.php";


use connection\Database;
use PDO;


class DashboardModel extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function getallusers(){
     $query = "select * from users";
   
     $stm = $this->getConnection()->query($query);
     $resu = $stm->fetchAll(PDO::FETCH_OBJ);
     return $resu;
           
    }
    public function getallwikis(){
      

        $query = "SELECT w.titre , c.nom , w.contenu as nom FROM wikis w  inner JOIN categories c where w.id_categorie = c.id";
        $stmt = $this->getConnection()->query($query);

        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records; 
        
    }

    public function getAlltags(){
        $query = "SELECT * FROM tags";
        $stmt = $this->getConnection()->query($query);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records;
    }
}