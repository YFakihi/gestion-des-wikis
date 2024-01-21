<?php 
namespace App\Controller;

use App\Model\ProfileModel;
class ProfileController {
    public function index() { 
          $wikis = new ProfileModel;
        $allWikis = $wikis->getallwikis();
        include "../app/View/profile.php";

    }
}
