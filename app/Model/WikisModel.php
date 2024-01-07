<?php
namespace App\Model;
include __DIR__ ."../../../database/Connection.php";


use connection\Database;
use PDO;

class WikisModel extends Database {
    
    public function __construct(){
        parent::__construct();
    }

    public function getallwikis(){
      

        $query = "SELECT w.titre , c.nom FROM wikis w  inner JOIN categories c where w.id_categorie = c.id";
        $stmt = $this->getConnection()->query($query);

        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
       

        return $records; // Return the fetched r
    }
    
}