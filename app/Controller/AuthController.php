<?php 
namespace App\Controller;
use App\Model\SignupModel;
use App\Model\SigninModel;

class AuthController {
    public function index() {
        include("../app/View/signup.php");
    }

    public function signup() {
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $reg = new SignupModel();
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $reg->registerUser($nom, $email, $password);
            header("Location:".URL_DIR."signin");
        }
    }

 public function signin() {
        include("../app/View/signin.php");
    } 
    public function log()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $signinModel = new SigninModel();

            $signinModel->login($email, $password);
            header("Location:".URL_DIR."home");
        }
    }
    
    
}
