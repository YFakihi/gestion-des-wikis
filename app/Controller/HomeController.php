<?php
namespace App\Controller;
use App\Model\TagsModel;
use App\Model\DashboardModel;
use App\Model\WikisModel;

class HomeController {
    public function index() {
        $wikis = new WikisModel;
        $allWikis = $wikis->getallwikis();
        

        $tags = new DashboardModel;
        $tags = $tags->getalltags();

        $cats = new DashboardModel;
        $cats = $cats->getallcat();

        include '../app/View/home.php';
    }
}
?>

