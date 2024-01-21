<?php  

namespace App\Model;
session_start();
use PDO;
class ProfileModel{
    private $db;
    public function __construct()
    {
        $this->db= Database::getInstance()->getConnection();
    }

    public function logout(){

        session_destroy();
    }

    public function getallwikis(){
      

        $query = "SELECT w.id, w.titre, w.contenu, w.id_categorie, w.id_user
        FROM wikis w
        JOIN users u ON w.id_user = u.id
        WHERE id_user  = $_SESSION[id]";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records;
        
    }
}