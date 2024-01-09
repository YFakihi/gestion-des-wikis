<?php 
namespace App\Controller;

use App\Model\DashboardModel;
use App\Model\TagsModel;

class DashboardController {
    public function index() {
        $users = new DashboardModel;
        $users = $users->getallusers();

        $wikis = new DashboardModel;
        $wikis = $wikis->getallwikis();

        $tags = new DashboardModel;
        $tags = $tags->getalltags();

        include "../app/View/dashbord/Dashboard.php";
    }

    public function accept() {
        $id = $_POST['id'];
        $wikis = new DashboardModel;
        $wikis = $wikis->accept($id);
        header('Location: '. $_SERVER['HTTP_REFERER']); 
    }
    
    public function delete() { 
        $id = $_POST['id'];
         $wikis = new DashboardModel;
        $wikis = $wikis->delete($id); 
        header('Location: '. $_SERVER['HTTP_REFERER']); 
    }

    public function addTags() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
             $tags = new TagsModel;
             $nom = $_POST['nom_tag'];
             $tags->addtags($nom);
             header('Location: '. $_SERVER['HTTP_REFERER']); 
        }
       
       
        
    }
}
