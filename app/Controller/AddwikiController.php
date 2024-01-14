<?php

namespace App\Controller;
use App\Model\AddWikiModel;
session_start();
class  AddwikiController
{

    public function index(){
       

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
             $wiki = new AddWikiModel;
             $titre = $_POST['titre'];
             $contenu = $_POST['contenu'];
             $id_categorie = $_POST['cat'];
             $id_user = $_SESSION['id'];
          $wiki->addwiki($titre,$contenu,$id_categorie,$id_user);
            header('Location: '. $_SERVER['HTTP_REFERER']); 
       }   
    }
}