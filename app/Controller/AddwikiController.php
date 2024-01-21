<?php

namespace App\Controller;
use App\Model\AddWikiModel;
session_start();
class  AddwikiController
{

    public function index(){
       

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $tag = $_POST["tag"];
             
             $wiki = new AddWikiModel;
             $titre = $_POST['titre'];
             $contenu = $_POST['contenu'];
             $id_categorie = $_POST['cat'];
             $id_user = $_SESSION['id'];
             $wiki->addwiki($titre,$contenu,$id_categorie,$id_user);
             $last_id_inserted = $wiki->getDb()->lastInsertId();
             foreach($tag as $t ){
              if ( $wiki->getDb()->query("INSERT INTO `wikitags`(`id_wiki`, `id_tag`) VALUES ($last_id_inserted,$t)"))
              echo "success" ; 
              else echo "error";
             }
            header('Location: '. $_SERVER['HTTP_REFERER']); 
       }   
    }
}